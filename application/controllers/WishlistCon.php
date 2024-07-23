<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WishlistCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Wishlist Model
        $this->load->model('Wishlist_model');
    }

    public function index() {
        $data['title'] = "Wishlist";

        // Assume we are getting the package IDs from the wishlist
        $wishlistItems = [
            ['userId' => 1, 'paketId' => 1], // Example data, replace with real data
        ];

        foreach ($wishlistItems as $key => $item) {
            $packageDetails = $this->Wishlist_model->get_package_details($item['paketId']);
            $wishlistItems[$key]['nama_paket'] = $packageDetails['Nama_Paket'];
            $wishlistItems[$key]['deskripsi'] = $packageDetails['Deskripsi'];
            $wishlistItems[$key]['harga'] = $packageDetails['Harga'];
            $wishlistItems[$key]['waktu_tour'] = $packageDetails['Waktu_Tour'];
        }

        $data['wishlistItems'] = $wishlistItems;

        $this->load->view('Wishlist', $data);
    }

    // Function to add item to the wishlist
    public function add() {
        // Get the user ID and package ID from POST request
        $userId = $this->input->post('userId');
        $paketId = $this->input->post('paketId');

        // Check if the inputs are valid
        if ($userId && $paketId) {
            // Insert into the database
            $result = $this->Wishlist_model->add_to_wishlist($userId, $paketId);

            // Send response back
            if ($result) {
                echo 'Produk berhasil ditambahkan ke wishlist';
            } else {
                echo 'Error menambahkan produk ke wishlist';
            }
        } else {
            echo 'ID User dan ID Paket tidak boleh kosong';
        }
    }

}

?>
