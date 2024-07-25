<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user'); // Ensure model name is correct
    }

    public function index()
    {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $data['user'] = $this->M_user->getUser();
        $this->load->view('LandingPage.php', $data);
    }

    public function viewContent()
    {
        $this->load->view('ContentDetail.php');
    }

    public function viewWishlist()
    {
        $this->load->view('Wishlist.php');
    }

    public function viewProfile()
    {
        $this->load->view('ProfilePage.php');
    }

    public function viewContact()
    {
        $this->load->view('Wishlist.php');
    }
}

/* End of file main.php */
