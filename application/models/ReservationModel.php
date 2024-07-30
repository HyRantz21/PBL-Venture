<?php
class ReservationModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_reservations() {
        $this->db->select('reservasi.ID_Reservasi, reservasi.ID_User, user.Full_Name, paket_wisata.ID_Paket, paket_wisata.Deskripsi');
        $this->db->from('reservasi');
        $this->db->join('user', 'reservasi.ID_User = user.ID_User');
        $this->db->join('paket_wisata', 'reservasi.ID_Paket = paket_wisata.ID_Paket');
        $query = $this->db->get();
    
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

    public function delete_reservation($ID_Reservasi) {
        $this->db->where('ID_Reservasi', $ID_Reservasi);
        return $this->db->delete('reservasi');
    }
}

?>
