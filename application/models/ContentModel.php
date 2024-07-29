<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk mengambil data paket wisata berdasarkan ID
    public function getPaketById($id_paket) {
        $this->db->where('ID_Paket', $id_paket);
        $query = $this->db->get('paket_wisata');
        return $query->row();
    }

    public function getDetail($id){
        $query = $this->db->get_where('paket_wisata', ['ID_Paket' => $id]);
        return $query->row();
    }
    
    // Fungsi untuk mengambil data user berdasarkan ID
    public function getUserById($id_user) {
        $this->db->where('ID_User', $id_user);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function saveReservation($data) {
        return $this->db->insert('reservasi', $data);
    }
}
?>