<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCon extends CI_Controller {

    public function index() {
        $this->load->model('ContentModel'); // Muat model sebelum view
        $data['detail'] = $this->ContentModel->getPaketById(1);
        $this->load->view('ContentDetail', $data);
    }

    public function detail($id_paket) {
        // Periksa apakah ID paket tersedia
        if ($id_paket === null) {
            show_404();
        }

        // Pastikan model dimuat
        $this->load->model('ContentModel');

        // Ambil data paket wisata berdasarkan ID
        $data['paket'] = $this->ContentModel->getPaketById($id_paket);

        // Jika data tidak ditemukan, tampilkan error
        if (empty($data['paket'])) {
            show_404();
        }

        // Tambahkan ID paket ke data yang dikirim ke view
        $data['paketId'] = $id_paket;

        // Load view dan kirim data
        $this->load->view('ContentDetail', $data);
    }


}
