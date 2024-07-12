<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCon extends CI_Controller {
    
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
        $this->load->view('v_venture/v_d_paket', $data);
    }

    public function viewPaket()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $this->load->view('v_venture/v_d_paket', $data);
    }

    public function viewUser()
    {
        $data['user'] = $this->M_user->getUser();
        $this->load->view('v_venture/v_user', $data);
    }

    public function tambahPaket()
    {
        $this->load->view('v_venture/v_tpaket');
    }

    public function tambahUser()
    {
        $this->load->view('v_venture/v_tuser');
    }

    public function aksiTambahUser()
    {
        $result = $this->M_user->inputUser();
        if ($result) {
            redirect('main/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to add user. Please make sure all fields are filled.";
        }
    }

    public function aksiTambahPaket()
    {
        $result = $this->M_paket_wisata->inputPaket();
        if ($result) {
            redirect('main/viewPaket');
        } else {
            // Handle the error appropriately
            echo "Failed to add paket_wisata. Please make sure all fields are filled.";
        }
    }

    public function editPaket($id)
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaketId($id);
        $this->load->view('v_venture/v_epaket_wisata', $data);
    }

    public function editUser($id)
    {
        $data['user'] = $this->M_user->getUserId($id);
        $this->load->view('v_venture/v_euser', $data);
    }

    public function aksiEditPaket()
    {
        $result = $this->M_paket_wisata->updateDataPaket();
        if ($result) {
            redirect('main/viewpaket_wisata');
        } else {
            // Handle the error appropriately
            echo "Failed to update paket_wisata. Please make sure all fields are filled.";
        }
    }

    public function aksiEditUser()
    {
        $result = $this->M_user->updateDataUser();
        if ($result) {
            redirect('main/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to update user. Please make sure all fields are filled.";
        }
    }

    public function hapusPaket($id)
    {
        $result = $this->M_paket_wisata->deleteDataPaket($id);
        if ($result) {
            redirect('main/viewPaket');
        } else {
            // Handle the error appropriately
            echo "Failed to delete paket_wisata.";
        }
    }

    public function hapusUser($id)
    {
        $result = $this->M_user->deleteDataUser($id);
        if ($result) {
            redirect('main/viewUser');
        } else {
            // Handle the error appropriately
            echo "Failed to delete user.";
        }
    }
}