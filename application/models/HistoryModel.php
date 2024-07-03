<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryModel extends CI_Model {

    public function getTransaksiByUserId($user_id) {
        // Query untuk mengambil data transaksi berdasarkan ID user
        $this->db->select('ID_Transaksi, ID_Paket, Tanggal_Transaksi, Tanggal_Update, Status, Catatan');
        $this->db->from('transaksi');
        $this->db->where('ID_User', $user_id);
        $query = $this->db->get();

        // Return hasil query sebagai array
        return $query->result_array();
    }
}
