<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket_wisata extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getPaket(){
        $this->db->select('paket_wisata.*, perusahaan.*');
        $this->db->from('paket_wisata');
        $this->db->join('perusahaan', 'paket_wisata.ID_Perusahaan = perusahaan.ID_Perusahaan');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    public function getPerusahaan(){
        $this->db->select('ID_Perusahaan, Nama_Perusahaan');
        $this->db->from('perusahaan');
        $result = $this->db->get();
        
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    public function inputPaket()
    {
        $data = array(
            'Nama_Paket' => $this->input->post('Nama_Paket'),
            'Kategori' => $this->input->post('Kategori'),
            'Harga' => $this->input->post('Harga'),
            'Lokasi' => $this->input->post('Lokasi'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'Waktu_Tour' => $this->input->post('Waktu_Tour'), // Menggunakan waktu tour yang sudah dihitung
            'QR_Code' => $this->input->post('QR_Code'),
            'ID_Perusahaan' => $this->input->post('ID_Perusahaan')
        );
        return $this->db->insert('paket_wisata', $data);
    }



    public function getPaketById($id_paket)
    {
        $this->db->where('ID_Paket', $id_paket);
        $query = $this->db->get('paket_wisata');
        return $query->row_array(); // Ensure it returns an associative array
    }


    public function deleteDataPaket($id)
    {
        $this->db->where('ID_Paket', $id);
        return $this->db->delete('paket_wisata');
    }
    
    public function updateDataPaket()
    {
        $data = array(
            'Nama_Paket' => $this->input->post('Nama_Paket'),
            'Kategori' => $this->input->post('Kategori'),
            'Harga' => $this->input->post('Harga'),
            'Lokasi' => $this->input->post('Lokasi'),
            'Deskripsi' => $this->input->post('Deskripsi'),
            'Waktu_Tour' => $this->input->post('Waktu_Tour'), // Directly using the input value
            'ID_Perusahaan' => $this->input->post('ID_Perusahaan'),
            'QR_Code' => $this->input->post('QR_Code')
        );
        $this->db->where('ID_Paket', $this->input->post('ID_Paket'));
        return $this->db->update('paket_wisata', $data);
    }




}
