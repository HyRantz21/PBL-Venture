<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user'); // Ensure model name is correct
        $this->load->model('ReservationModel');
        $this->load->model('HistoryModel');
    }

    public function index()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $data['user'] = $this->M_user->getUser();
        $data['reservasi'] = $this->ReservationModel->get_reservations();
        $this->load->view('dashboard/Admin', $data);
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
            redirect('dashboard/');
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
            redirect('dashboard/');
        } else {
            echo "Gagal memperbarui paket wisata";
        }
    }

    public function aksiEditUser()
    {
        $result = $this->M_user->updateUser();
        if ($result) {
            redirect('dashboard/');
        } else {
            echo "Failed to update user. Please make sure all fields are filled.";
        }
    }

    public function hapusPaket($id)
    {
        $result = $this->M_paket_wisata->deleteDataPaket($id);
        if ($result) {
            redirect('dashboard/');
        } else {
            echo "Failed to delete paket_wisata.";
        }
    }

    public function hapusUser($id)
    {
        $result = $this->M_user->deleteUser($id);
        if ($result) {
            redirect('dashboard/');
        } else {
            echo "Failed to delete user.";
        }
    }

    public function reservations() {
        $data['reservations'] = $this->ReservationModel->get_reservations();
        $this->load->view('dashboard/', $data);
    }

    public function confirmReservation($ID_Reservasi) {
        // Get the reservation details
        $reservation = $this->db->get_where('reservasi', array('ID_Reservasi' => $ID_Reservasi))->row_array();

        if ($reservation) {
            // Add to transaction history with total_harga and total_adult
            $this->HistoryModel->add_transaction(
                $reservation['ID_User'],
                $reservation['ID_Paket'],
                $reservation['total_harga'], // Pass total_harga
                $reservation['total_adult'], // Pass total_adult
                'Confirmed', // Assuming status is 'Confirmed'
                '', // Assuming no catatan is provided
                $reservation['Tanggal_Reservasi'],
            );

            // Delete the reservation
            $this->ReservationModel->delete_reservation($ID_Reservasi);
        }

        // Redirect to the reservations dashboard
        redirect('dashboard/');
    }

    public function deleteReservation($ID_Reservasi) {
        $this->ReservationModel->delete_reservation($ID_Reservasi);
        redirect('dashboard');
    }
}