<?php
class ReservationModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_reservations() {
        $this->db->select('reservasi.ID_Reservasi, reservasi.ID_User, user.Full_Name, paket_wisata.*, reservasi.total_harga, reservasi.total_adult');
        $this->db->from('reservasi');
        $this->db->join('user', 'reservasi.ID_User = user.ID_User');
        $this->db->join('paket_wisata', 'reservasi.ID_Paket = paket_wisata.ID_Paket');
        $query = $this->db->get();
    
        return $query->result_array();
    }
    
    public function add_reservation($ID_User, $ID_Paket, $total_adult, $total_harga) {
        $data = array(
            'ID_User' => $ID_User,
            'ID_Paket' => $ID_Paket,
            'Tanggal_Reservasi' => date('Y-m-d H:i:s'),
            'total_harga' => $total_harga,
            'total_adult' => $total_adult
        );
        return $this->db->insert('reservasi', $data);
    }
    

    private function calculate_total_harga($ID_Paket, $total_adult) {
        // Assume you have logic to calculate total_harga based on ID_Paket and total_adult
        // You can modify this function to suit your needs
        $this->db->select('Harga');
        $this->db->from('paket_wisata');
        $this->db->where('ID_Paket', $ID_Paket);
        $query = $this->db->get();
        $result = $query->row();
        return $result ? $result->Harga * $total_adult : 0; // Example logic
    }


    public function delete_reservation($ID_Reservasi) {
        $this->db->where('ID_Reservasi', $ID_Reservasi);
        return $this->db->delete('reservasi');
    }
}

?>
