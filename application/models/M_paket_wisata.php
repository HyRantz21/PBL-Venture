<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket_wisata extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getPaket(){
        $result = $this->db->get('paket_wisata');
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
            'Waktu_Tour' => $this->input->post('Waktu_Tour'),
            'QR_Code' => $this->input->post('QR_Code')
        );
        return $this->db->insert('paket_wisata', $data);
    }

    public function getPaketId($id)
    {
        $this->db->where('ID_Paket', $id);
        $result = $this->db->get('paket_wisata');
        return $result->row_array();
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
            'Waktu_Tour' => $this->input->post('Waktu_Tour'),
            'ID_Perusahaan' => $this->input->post('ID_Perusahaan'),
            'QR_Code' => $this->input->post('QR_Code')
        );

        if (empty($this->input->post('ID_Paket')) || empty($data['Nama_Paket']) || empty($data['Kategori']) || empty($data['Harga']) || empty($data['Lokasi']) || empty($data['Waktu_Tour']) || empty($data['ID_Perusahaan'])) {
            return false;
        }

        $this->db->where('ID_Paket', $this->input->post('ID_Paket'));
        return $this->db->update('paket_wisata', $data);
    }
}
