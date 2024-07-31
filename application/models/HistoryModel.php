<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get user transactions
    public function get_user_transactions($user_id) {
        $this->db->select('transaksi.*, user.Full_Name, paket_wisata.gambar_1, paket_wisata.Harga, transaksi.total_harga, transaksi.total_adult');
        $this->db->from('transaksi');
        $this->db->join('user', 'transaksi.ID_User = user.ID_User');
        $this->db->join('paket_wisata', 'transaksi.ID_Paket = paket_wisata.ID_Paket');
        $this->db->where('transaksi.ID_User', $user_id);
        $query = $this->db->get();

        return $query->result();
    }

    public function add_transaction($ID_User, $ID_Paket, $total_harga, $total_adult, $Tanggal_Reservasi, $status = 'Confirmed', $catatan = '') {

        $data = array(
            'ID_User' => $ID_User,
            'ID_Paket' => $ID_Paket,
            'total_harga' => $total_harga,
            'total_adult' => $total_adult,
            'Tanggal_Transaksi' => date('Y-m-d H:i:s'),
            'Tanggal_Update' => $Tanggal_Reservasi,
            'Status' => $status,
            'Catatan' => $catatan,
        );
        return $this->db->insert('transaksi', $data);
    }

    public function update_transaction_with_reservation_data($ID_Transaksi, $total_harga, $total_adult) {
        $data = array(
            'total_harga' => $total_harga,
            'total_adult' => $total_adult
        );
        $this->db->where('ID_Transaksi', $ID_Transaksi);
        return $this->db->update('transaksi', $data);
    }
}
