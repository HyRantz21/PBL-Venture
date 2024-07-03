<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        
        // Load the Wishlist Model
        $this->load->model('Wishlist_model');
    }
    public function wishlist(){
        $this->load->view('Wishlist');
    }

    // Function to add item to the wishlist
    public function add() {
        // Get the user ID and package ID from POST request
        $userId = $this->input->post('userId');
        $paketId = $this->input->post('paketId');

        // Insert into the database
        $result = $this->Wishlist_model->add_to_wishlist($userId, $paketId);

        // Send response back
        if($result) {
            echo 'Produk berhasil ditambahkan ke wishlist';
        } else {
            echo 'Error menambahkan produk ke wishlist';
        }
    }
}
