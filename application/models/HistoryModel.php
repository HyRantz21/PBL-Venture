<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get user transactions
    public function get_user_transactions($user_id) {
        $this->db->select('transaksi.*, user.Full_Name');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.ID_User = user.ID_User');
        $this->db->where('transaksi.ID_User', $user_id);
        $query = $this->db->get();

        return $query->result();
    }
}
