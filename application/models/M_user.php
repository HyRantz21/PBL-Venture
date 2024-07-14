<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser(){
        $result = $this->db->get('users');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    public function getUserById($id)
    {
        $this->db->where('ID_User', $id);
        $result = $this->db->get('users');
        return $result->row_array();
    }

    public function deleteUser($id)
    {
        $this->db->where('ID_User', $id);
        return $this->db->delete('users');
    }
    
    public function updateUser()
    {
        $data = array(
            'Full_Name' => $this->input->post('Full_Name'),
            'Email' => $this->input->post('Email'),
            'Password' => password_hash($this->input->post('Password'), PASSWORD_BCRYPT),
            'Role' => $this->input->post('Role'),
            'token' => $this->input->post('token'),
            'email_verified' => $this->input->post('email_verified')
        );

        if (empty($this->input->post('ID_User')) || empty($data['Full_Name']) || empty($data['Email']) || empty($data['Password']) || empty($data['Role'])) {
            return false;
        }

        $this->db->where('ID_User', $this->input->post('ID_User'));
        return $this->db->update('users', $data);
    }
}
