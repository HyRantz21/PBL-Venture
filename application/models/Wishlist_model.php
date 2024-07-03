<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    // Function to add item to the wishlist
    public function add_to_wishlist($userId, $paketId) {
        // Define data to be inserted
        $data = array(
            'ID_User' => $userId,
            'ID_Paket' => $paketId
        );

        // Insert data into 'wishlist' table
        return $this->db->insert('wishlist', $data);
    }
}
