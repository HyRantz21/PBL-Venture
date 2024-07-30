<?php
class Wishlist_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_wishlist($userID) {
        $this->db->select('paket_wisata.*');
        $this->db->from('wishlist');
        $this->db->join('paket_wisata', 'wishlist.ID_Paket = paket_wisata.ID_Paket');
        $this->db->where('wishlist.ID_User', $userID);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_package_id($packageName) {
        $this->db->select('ID_Paket');
        $this->db->from('paket_wisata');
        $this->db->where('Nama_Paket', $packageName);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->ID_Paket;
        } else {
            return false;
        }
    }

    public function add_to_wishlist($userID, $packageID) {
        $data = array(
            'ID_User' => $userID,
            'ID_Paket' => $packageID
        );
    
        if ($this->db->insert('wishlist', $data)) {
            return true;
        } else {
            log_message('error', 'Error inserting data into wishlist: ' . $this->db->_error_message());
            return false;
        }
    }

    public function remove_from_wishlist($userID, $packageID) {
        $this->db->where(['ID_User' => $userID, 'ID_Paket'=> $packageID]);
        return $this->db->delete('wishlist');
    }

    public function is_in_wishlist($userID, $packageID) {
        $this->db->where(['ID_User' => $userID, 'ID_Paket' => $packageID]);
        $query = $this->db->get('wishlist');
        
        return $query->num_rows() > 0;
    }
    
}
