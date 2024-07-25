<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user'); // Ensure model name is correct
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

    public function tambahPaket()
    {
        $data['perusahaan'] = $this->M_paket_wisata->getPerusahaan();
        $this->load->view('dashboard/v_t_paket', $data);
    }

    public function aksiTambahPaket() 
    {
        $this->M_paket_wisata->inputPaket();
        redirect('dashboard/viewPaket');
    }

    public function editPaket($id_paket)
    {
        $data['paket'] = $this->M_paket_wisata->getPaketById($id_paket);
        $data['perusahaan'] = $this->M_paket_wisata->getPerusahaan();
        $this->load->view('dashboard/v_e_paket', $data);
    }

    public function viewUser()
    {
        $data['user'] = $this->M_user->getUser();
        $this->load->view('dashboard/v_user', $data);
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

    public function viewPerusahaan()
    {
        $data['perusahaan'] = $this->M_perusahaan->getPerusahaan();
        $this->load->view('dashboard/dashboard/Perusahaan.html', $data);
    }

    public function tambahPerusahaan()
    {
        $this->load->view('dashboard/v_t_perusahaan');
    }

    public function aksiTambahPerusahaan()
    {
        $this->M_perusahaan->inputPerusahaan();
        redirect('dashboard/viewPerusahaan');
    }

    public function editPerusahaan($id)
    {
        $data['perusahaan'] = $this->M_perusahaan->getPerusahaanById($id);
        $this->load->view('dashboard/v_e_perusahaan', $data);
    }

    public function aksiEditPerusahaan()
    {
        $this->load->model('M_perusahaan');
        $this->form_validation->set_rules('Nama_Perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('Alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('Nomor_Telepon', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->editPerusahaan($this->input->post('ID_Perusahaan'));
        } else {
            $result = $this->M_perusahaan->updateDataPerusahaan();
            if ($result) {
                redirect('dashboard/viewPerusahaan');
            } else {
                echo "Failed to update user. Please try again.";
            }
        }
    }

    public function hapusPerusahaan($id)
    {
        $result = $this->M_perusahaan->deleteDataPerusahaan($id);
        if ($result) {
            redirect('dashboard/viewPerusahaan');
        } else {
            echo "Failed to delete user.";
        }
    }
}
?>
