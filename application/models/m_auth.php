<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_auth extends CI_Model {

    public function getUser($email) {
        return $this->db->get_where('user', ['email' => $email]);
    }

    public function config_email($email, $token, $type) {
        $config = [
            'useragent' => 'Codeigniter',
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'VentureTravelAgent1@gmail.com',
            'smtp_pass' => 'uvbi cexp alkn jlud',
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'smtp_timeout' => 30,
            'wordwrap' => TRUE
        ];
    
        $this->email->initialize($config);
        $this->email->from('VentureTravelAgent1@gmail.com', 'Venture');
        $this->email->to($email);
    
        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $message = "Please click the following link to verify your account: " . base_url() . "auth/verify?email=" . urlencode($email) . "&token=" . urlencode($token);
        } elseif ($type == 'reset') {
            $this->email->subject('Reset Password');
            $message = "Please click the following link to reset your password: " . base_url() . "auth/update_password?email=" . urlencode($email) . "&token=" . urlencode($token);
        }
    
        $this->email->message($message);
    
        if (!$this->email->send()) {
            log_message('error', 'Email not sent: ' . $this->email->print_debugger());
        }
    }
    

    public function add($email, $pass, $name) {
        $token = bin2hex(random_bytes(50));

        $datausers = [
            'Email' => $email,
            'Password' => $pass,
            'Role' => 'User',
            'Full_Name' => $name,
            'email_verified' => NULL,
            'token' => $token
        ];

        $this->db->trans_start();
        $this->db->insert('user', $datausers);

        $last_id_user = $this->db->insert_id();
        
        $data_profile = array(
            'Full_name' => $name,
            'Email' => $email,
            'fk_profile_user' => $last_id_user
        );
        $this->db->insert('profile', $data_profile);
        
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
        $this->config_email($email, $token, 'verify');
    }
    public function updateUser($id, $data) {
        $this->db->where('ID_User', $id);
        $this->db->update('user', $data);
    }
    public function get_all_passwords() {
        $this->db->select('Password');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function save_verification_token($user_id, $token) {
        $this->db->where('ID_User', $user_id);
        $this->db->update('user', ['token' => $token]);
    }

    public function email_verified($id) {
        $this->db->set('email_verified', 'NOW()', FALSE);
        $this->db->where('ID_User', $id);
        $this->db->update('user');
    }
    public function save_reset_token($user_id, $token) {
        $data = [
            'reset_token' => $token,
            'token_created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->where('ID_User', $user_id);
        $this->db->update('user', $data);
    }
    
    public function update_password($id, $hashed_password) {
        $data = [
            'Password' => $hashed_password,
            'reset_token' => null, // Invalidate the token
            'token_created_at' => null
        ];
        $this->db->where('ID_User', $id);
        $this->db->update('user', $data);
    }
    
    
    // public function update_password($id, $hashed_password) {
    //     $this->db->set('Password', $hashed_password);
    //     $this->db->where('ID_User', $id);
    //     $this->db->update('user');
    // }

}
?>
