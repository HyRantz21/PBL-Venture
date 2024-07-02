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

    public function register_pelamar(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.Email]', [
            'is_unique' => 'This Email has already been registered',
        ]);
        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]', [
            'min_length' => 'Your password is too short',
        ]);
        $this->form_validation->set_rules('password1', 'Confirm Password', 'trim|required|matches[password]', [
            'matches' => 'Your passwords do not match',
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = array('title' => 'Register');
            $this->load->view('logreg/Register', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $name = $this->input->post('full_name');
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $this->m_auth->add($email, htmlspecialchars($hashed_password), $name);
            $this->session->set_flashdata('success', 'Account created successfully! Please verify your email.');
            redirect('auth/login');
        }
    }

    public function verify(){
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
                                redirect('User');
                                break;
                            case "Perusahaan":
                                redirect('Perusahaan');
                                break;
                            case "Admin":
                                redirect('Admin');
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

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
