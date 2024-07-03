<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('HistoryModel'); // Load model di constructor
    }

    public function index() {
        // Gantilah dengan ID user sebenarnya (misalnya, dari sesi login)
        $user_id = 1; // Contoh hardcoded, sebaiknya ambil dari sesi atau autentikasi

        // Ambil data transaksi berdasarkan ID user
        $data['transaksi'] = $this->HistoryModel->getTransaksiByUserId($user_id);

        // Load view dan kirim data
        $this->load->view('History', $data);
    }
}
