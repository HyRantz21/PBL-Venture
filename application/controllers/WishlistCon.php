<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WishlistCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Wishlist_model');
        $this->load->helper('url');
    }

    public function index() {
        $userID = $this->session->userdata('ID_User'); // Assuming you store the user ID in session
        $data['wishlist'] = $this->Wishlist_model->get_wishlist($userID);
        $this->load->view('Wishlist', $data);
    }

    public function add() {
        $userID = $this->session->userdata('ID_User'); // Assuming you store the user ID in session
        $packageName = $this->input->post('ID_Paket');
        
        if (!$userID || !$packageName) {
            echo 'User ID or Package Name is missing';
            return;
        }
        
        $packageID = $this->Wishlist_model->get_package_id($packageName);
    
        if ($packageID) {
            $added = $this->Wishlist_model->add_to_wishlist($userID, $packageID);
            if ($added) {
                echo 'Produk berhasil ditambahkan ke wishlist';
            } else {
                echo 'Error menambahkan produk ke wishlist';
            }
        } else {
            echo 'Package ID not found';
        }
    }

    public function remove() {
        $userID = $this->session->userdata('ID_User'); // Assuming you store the user ID in session
        $packageID = $this->input->post('ID_Paket');

        $delete = $this->Wishlist_model->remove_from_wishlist($userID, $packageID);

        if ($delete) {
            // echo "Produk berhasil dihapus dari wishlist";
            echo "<script>
                alert('Produk berhasil dihapus dari wishlist');
                setTimeout(function() {
                window.location.href = 'http://localhost/PBL-Venture/WishlistCon'; // Ubah URL sesuai dengan yang diinginkan
            }, 1000);
            </script>";
        } else {
            echo 'Error menghapus produk dari wishlist';
        }
    }
}
