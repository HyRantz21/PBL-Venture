<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getPaketById($id_paket) {
        $this->db->where('ID_Paket', $id_paket);
        return $query = $this->db->get('paket_wisata')->row_array();
    }

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
