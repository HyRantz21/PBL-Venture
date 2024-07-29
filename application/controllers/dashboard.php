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
        $this->load->view('dashboard-beta/test_gambar', $data);
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
        // Data berhasil dimasukkan ke database
        $this->session->set_flashdata('success', 'Data berhasil dimasukkan ke database');
        redirect('dashboard/viewPaket');
    } else {
        // Gagal memasukkan data ke database
        $this->session->set_flashdata('error', 'Gagal memasukkan data ke database');
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

    public function aksiEditPaket()
    {
        $result = $this->M_paket_wisata->updateDataPaket();
        redirect('dashboard/viewPaket');
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
}