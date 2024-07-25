<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function index()
    {
        $this->load->view('LandingPage.php');
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
