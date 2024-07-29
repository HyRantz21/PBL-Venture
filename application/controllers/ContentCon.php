<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCon extends CI_Controller {

    public function index() {
        $this->load->model('ContentModel'); // Muat model sebelum view
        $data['detail'] = $this->ContentModel->getPaketById(1);
        $this->load->view('ContentDetail', $data);
    }

    // Fungsi untuk menampilkan detail paket wisata
    public function detail($id_paket) {
        $data['detail'] = $this->ContentModel->getPaketById($id_paket);
        $this->load->view('ContentDetail', $data);
    }

     // Fungsi untuk menyimpan data reservasi
     public function reserve() {
        $this->load->model('ContentModel');

        // Ambil data dari form
        $id_paket = $this->input->post('ID_Paket');
        $id_user = $this->session->userdata('ID_User');

        // Ambil data paket dan user dari database
        $paket = $this->ContentModel->getPaketById($id_paket);
        $user = $this->ContentModel->getUserById($id_user);

        // Siapkan data untuk disimpan
        $data = array(
            'ID_User' => $id_user,
            'ID_Paket' => $id_paket,
            'Full_Name' => $user->Full_Name,
            'Deskripsi' => $paket->Deskripsi
        );

        // Simpan data ke tabel reservasi
        $this->ContentModel->saveReservation($data);

        // Arahkan ke halaman reservasi atau halaman lain yang diinginkan
        redirect('ReservationCon');
    }
}
