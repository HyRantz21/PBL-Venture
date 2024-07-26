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

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    public function getDetail($id){
        $query = $this->db->get_where('ID_Paket', $id);
        return $query->row();
    }
}