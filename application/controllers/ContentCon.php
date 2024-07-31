<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCon extends CI_Controller {

    public function index($ID_Paket) {
        $this->load->model('ContentModel');
        $data['detail'] = $this->ContentModel->getPaketById($ID_Paket); // Static ID for default display
        $this->load->view('ContentDetail', $data);
    }

    public function detail($ID_Paket) {
        $this->load->model('ContentModel');
        $data['detail'] = $this->ContentModel->getPaketById($ID_Paket);
        
        if (empty($data['detail'])) {
            show_404();
        } else {
            $this->load->view('ContentDetail', $data);
        }
    }

    public function reserve() {
        $this->load->model('ContentModel');
        $id_paket = $this->input->post('ID_Paket');
        $id_user = $this->session->userdata('ID_User');
        $total_adult = $this->input->post('total_adult');
        $Tanggal_Reservasi = $this->input->post('Tanggal_Reservasi');

        // var_dump($Tanggal_Reservasi);
        // die();
        
        $paket = $this->ContentModel->getPaketById($id_paket);
        $user = $this->ContentModel->getUserById($id_user);
    
        if ($paket && $user) {
            $total_harga = $paket['Harga'] * $total_adult;
    
            $data = array(
                'ID_User' => $id_user,
                'ID_Paket' => $id_paket,
                'Full_Name' => $user->Full_Name,
                'Deskripsi' => $paket['Deskripsi'],
                'total_harga' => $total_harga,
                'total_adult' => $total_adult,
                'Tanggal_Reservasi' => $Tanggal_Reservasi,
            );
    
            $this->ContentModel->saveReservation($data);
            redirect('ReservationCon');
        } else {
            // Handle case when paket or user not found
            show_error('Invalid Package or User', 500);
        }
    }
    
    
}
?>
