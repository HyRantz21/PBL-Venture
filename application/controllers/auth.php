<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index(){
        redirect('auth/login');
    }

    public function login(){
        $data = array('title' => 'Login');
        $this->load->view('logreg/LoginPage', $data);
    }

    public function view_register(){
        $data = array('title' => 'Register');
        $this->load->view('logreg/Register', $data);
    }

    public function register_user(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.Email]', [
            'is_unique' => 'This Email has already been registered',
        ]);
        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|callback_password_not_used', [
            'min_length' => 'Your password is too short',
        ]);
        $this->form_validation->set_rules('password1', 'Confirm Password', 'trim|required|matches[password]', [
            'matches' => 'Your passwords do not match',
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Register',
                'errors' => validation_errors() // Retrieve validation errors
            );
            $this->load->view('logreg/Register', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $name = $this->input->post('full_name');
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Use transaction to ensure data integrity
            $this->db->trans_start();
            $user_id = $this->m_auth->add($email, htmlspecialchars($hashed_password), $name);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                // If transaction failed, show error
                $this->session->set_flashdata('error', 'Failed to create an account. Please try again.');
                redirect('auth/view_register');
            } else {
                // If transaction successful, send verification email and show verification view
                $this->send_verification_email($user_id, $email);
                $data['email'] = $email;
                $this->load->view('logreg/email_verification', $data);
            }
        }
    }

    public function password_not_used($password) {
        $this->load->model('m_auth'); // Pastikan model sudah dimuat
        
        // Ambil semua hash password dari database
        $existing_passwords = $this->m_auth->get_all_passwords();
        
        foreach ($existing_passwords as $existing_password) {
            if (password_verify($password, $existing_password['Password'])) {
                $this->form_validation->set_message('password_not_used', 'The password is already used by another account.');
                return FALSE;
            }
        }
        return TRUE;
    }

    public function send_verification_email($user_id, $email) {
        $this->load->helper('string');
        $token = random_string('alnum', 50);
        $this->m_auth->save_verification_token($user_id, $token);
        $this->m_auth->config_email($email, $token, 'verify'); // Pass the third argument
    }

    public function verify() {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->m_auth->getUser($email)->row();
    
        if ($user) {
            if (hash_equals($token, $user->token)) {
                $this->m_auth->email_verified($user->ID_User);
                $this->session->set_flashdata('success', 'Account verified successfully! Please login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Account activation failed, token mismatch.');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Account activation failed, email not found.');
            redirect('auth/login');
        }
    }

    public function proses_login(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('title' => 'Login');
            $this->load->view('logreg/LoginPage', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->m_auth->getUser($email)->row();

            if ($user) {
                if (password_verify($password, $user->Password)) {
                    if ($user->email_verified == NULL) {
                        $this->session->set_flashdata('error', 'Account not verified, please check your email.');
                        redirect('auth/login');
                    } else {
                        $this->session->set_userdata('email', $user->Email);
                        switch ($user->Role) {
                            case "User":
                                redirect('Contentcon');
                                break;
                            case "Perusahaan":
                                redirect('Perusahaan');
                                break;
                            case "Admin":
                                redirect('dashboard');
                                break;
                            default:
                                redirect('auth/login');
                                break;
                        }
                    }
                } else {
                    $this->session->set_flashdata('error', 'Incorrect password.');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('error', 'Email not registered.');
                redirect('auth/login');
            }
        }
    }
    public function forgot_password() {
        $data = array('title' => 'Forgot Password');
        $this->load->view('logreg/ForgotPassword', $data);
    }
    
    public function reset_password() {
        $email = $this->input->post('email');
        $user = $this->m_auth->getUser($email)->row();
    
        if ($user) {
            $token = bin2hex(random_bytes(50));
            $this->m_auth->save_reset_token($user->ID_User, $token);
            $this->m_auth->config_email($email, $token, 'reset');
    
            $data['email'] = $email;
            $this->load->view('logreg/email_passwordchange', $data);
        } else {
            $this->session->set_flashdata('error', 'Email not registered.');
            redirect('auth/forgot_password');
        }
    }
    
    
    public function update_password() {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->m_auth->getUser($email)->row();
    
        if ($user && hash_equals($token, $user->reset_token)) {
            $token_life = 3600; // Token validity in seconds (1 hour)
            $token_created_at = strtotime($user->token_created_at);
            if ((time() - $token_created_at) < $token_life) {
                $data = array(
                    'title' => 'Update Password',
                    'email' => $email,
                    'token' => $token
                );
                $this->load->view('logreg/UpdatePassword', $data);
                return;
            }
        }
        $this->session->set_flashdata('error', 'Invalid or expired reset token.');
        redirect('auth/login');
    }
    
    public function process_update_password() {
        $email = $this->input->post('email');
        $token = $this->input->post('token');
        $new_password = $this->input->post('password');
    
        $user = $this->m_auth->getUser($email)->row();
    
        if ($user && hash_equals($token, $user->reset_token)) {
            $token_life = 3600; // Token validity in seconds (1 hour)
            $token_created_at = strtotime($user->token_created_at);
            if ((time() - $token_created_at) < $token_life) {
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $this->m_auth->update_password($user->ID_User, $hashed_password);
    
                // Invalidate the token after a successful password update
                $this->m_auth->save_reset_token($user->ID_User, null);
    
                $this->session->set_flashdata('success', 'Password updated successfully! Please login.');
                redirect('auth/login');
                return;
            }
        }
        $this->session->set_flashdata('error', 'Invalid or expired reset token.');
        redirect('auth/login');
    }
    

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
