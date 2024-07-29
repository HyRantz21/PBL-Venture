<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user'); // Ensure model name is correct
    }

    public function index()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $this->load->view('dashboard-beta/paket', $data);
    }

    public function viewPaket()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $this->load->view('dashboard-beta/paket', $data);
    }

    public function tambahPaket()
    {
        $this->load->view('dashboard-beta/v_t_paket');
    }

    public function aksiTambahPaket()
    {
        $result = $this->M_paket_wisata->inputPaket();
        if ($result) {
            redirect('dashboard/viewPaket');
        } else {
            echo "Gagal menambahkan paket wisata";
        }
    }


    public function editPaket($id_paket)
    {
        $data['paket'] = $this->M_paket_wisata->getPaketById($id_paket);
        $this->load->view('dashboard-beta/v_e_paket', $data);
    }

    public function viewUser()
    {
        $data['user'] = $this->M_user->getUser();
        $this->load->view('dashboard-beta/User', $data);
    }

    public function editUser($id)
    {
        $data['user'] = $this->M_user->getUserById($id);
        $this->load->view('dashboard/v_euser', $data);
    }

    public function aksiEditPaket($id_paket)
    {
        // Load model and update data
        $result = $this->M_paket_wisata->updateDataPaket();
        if ($result) {
            redirect('dashboard/viewPaket');
        } else {
            echo "Gagal memperbarui paket wisata";
        }
    }

    public function aksiEditUser()
    {
        $result = $this->M_user->updateUser();
        if ($result) {
            redirect('dashboard/viewUser');
        } else {
            echo "Failed to update user. Please make sure all fields are filled.";
        }
    }

    public function hapusPaket($id)
    {
        $result = $this->M_paket_wisata->deleteDataPaket($id);
        if ($result) {
            redirect('dashboard/viewPaket');
        } else {
            echo "Failed to delete paket_wisata.";
        }
    }

    public function hapusUser($id)
    {
        $result = $this->M_user->deleteUser($id);
        if ($result) {
            redirect('dashboard/viewUser');
        } else {
            echo "Failed to delete user.";
        }
    }

    public function test_gambar()
    {
        $this->load->view('test_gambar');
        
    }
}