<?php
class ReservationModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_reservations() {
        $query = $this->db->get('reservasi');
        return $query->result_array();
    }

    public function add_reservation($ID_User, $ID_Paket) {
        $data = array(
            'ID_User' => $ID_User,
            'ID_Paket' => $ID_Paket,
            'Tanggal_Reservasi' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('reservasi', $data);
    }
}
?>
