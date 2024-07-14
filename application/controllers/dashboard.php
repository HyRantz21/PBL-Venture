<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user');
        $this->load->model('M_perusahaan');
    }

    public function index()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $this->load->view('dashboard/v_paket', $data);
    }

    public function viewPaket()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $this->load->view('dashboard/v_paket', $data);
    }

    public function viewUser()
    {
        $data['user'] = $this->M_user->getUser();
        $this->load->view('dashboard/v_user', $data);
    }

    public function tambahPaket()
    {
        $data['perusahaan'] = $this->M_paket_wisata->getPerusahaan();
        $this->load->view('dashboard/v_t_paket', $data);
    }

    public function tambahUser()
    {
        $this->load->view('dashboard/v_tuser');
    }

    public function aksiTambahUser()
    {
        $result = $this->M_user->inputUser();
        if ($result) {
            redirect('dashboard/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to add user. Please make sure all fields are filled.";
        }
    }

    public function aksiTambahPaket() {
        $hari = intval($this->input->post('Hari'));
        $jam = intval($this->input->post('Jam'));
        $menit = intval($this->input->post('Menit'));
        $detik = intval($this->input->post('Detik'));
    
        // Mengonversi waktu ke format yang diinginkan
        $waktu_tour = ($hari * 24 * 60 * 60) + ($jam * 3600) + ($menit * 60) + $detik;
    
        // Mengirim data ke model
        $this->M_paket_wisata->inputPaket($waktu_tour);
        redirect('dashboard');
    }
    
    

    public function editPaket($id_paket)
{
    $data['paket'] = $this->M_paket_wisata->getPaketById($id_paket); // Ensure this method fetches the correct data
    $data['perusahaan'] = $this->M_paket_wisata->getPerusahaan(); // Assuming this gets the companies for the dropdown

    // Load the view with the fetched data
    $this->load->view('dashboard/v_e_paket', $data);
}



    public function editUser($id)
    {
        $data['user'] = $this->M_user->getUserId($id);
        $this->load->view('dashboard/v_euser', $data);
    }

    public function aksiEditPaket()
    {
        $result = $this->M_paket_wisata->updateDataPaket();
        redirect('dashboard/viewPaket');
    }

    public function aksiEditUser()
    {
        $result = $this->M_user->updateDataUser();
        if ($result) {
            redirect('dashboard/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to update user. Please make sure all fields are filled.";
        }
    }

    public function hapusPaket($id)
    {
        $result = $this->M_paket_wisata->deleteDataPaket($id);
        if ($result) {
            redirect('dashboard/viewPaket');
        } else {
            // Handle the error appropriately
            echo "Failed to delete paket_wisata.";
        }
    }

    public function hapusUser($id)
    {
        $result = $this->M_user->deleteDataUser($id);
        if ($result) {
            redirect('dashboard/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to delete user.";
        }
    }

}