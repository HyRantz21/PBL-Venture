<?php
class ReservationCon extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ReservationModel');
        $this->load->model('HistoryModel'); // Ensure HistoryModel is loaded
    }

    public function index() {
        $data['reservations'] = $this->ReservationModel->get_reservations();
        $this->load->view('Reservation', $data);
    }

    public function add() {
        $ID_User = $this->input->post('ID_User');
        $ID_Paket = $this->input->post('ID_Paket');
        $total_adult = $this->input->post('total_adult');
        $total_harga = $this->input->post('total_harga');
        $Tanggal_Reservasi = $this->input->post('Tanggal_Reservasi');
    
        $this->ReservationModel->add_reservation($ID_User, $ID_Paket, $total_adult, $total_harga, $Tanggal_Reservasi);
        redirect('ReservationCon');
    }
    

    public function delete($ID_Reservasi) {
        $this->ReservationModel->delete_reservation($ID_Reservasi);
        redirect('ReservationCon');
    }
}
?>
