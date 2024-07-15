<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perusahaan extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getPerusahaan(){
        $result = $this->db->get('perusahaan');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    public function inputPerusahaan()
    {
        $data = array(
            'Nama_Perusahaan' => $this->input->post('Nama_Perusahaan'),
            'Alamat' => $this->input->post('Alamat'),
            'Nomor_Telepon' => $this->input->post('Nomor_Telepon'),
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password')
        );
        return $this->db->insert('perusahaan', $data);
    }

    public function getPerusahaanById($id)
    {
        $this->db->where('ID_Perusahaan', $id);
        $result = $this->db->get('perusahaan');
        return $result->row_array();
    }

    public function deleteDataPerusahaan($id)
    {
        $this->db->where('ID_Perusahaan', $id);
        return $this->db->delete('perusahaan');
    }
    
    public function updateDataPerusahaan()
    {
        $data = array(
            'Nama_Perusahaan' => $this->input->post('Nama_Perusahaan'),
            'Alamat' => $this->input->post('Alamat'),
            'Nomor_Telepon' => $this->input->post('Nomor_Telepon'),
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password')
        );

        $this->db->where('ID_Perusahaan', $this->input->post('ID_Perusahaan'));
        return $this->db->update('perusahaan', $data);
    }
}
