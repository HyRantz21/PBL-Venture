<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_paket_wisata');
        $this->load->model('M_user'); 
        $this->load->model('Wishlist_model');
        $this->load->model('HistoryModel');
        $this->load->model('ContentModel');
        
    }

    public function index() {
        $data['paket_wisata'] = $this->M_paket_wisata->getPaket();
        $data['user'] = $this->M_user->getUser();
        $this->load->view('LandingPage', $data);
    }

    public function getPaketByCategory() {
        $category = $this->input->post('category');
        $data['paket_wisata'] = $this->M_paket_wisata->getPaketByCategory($category);
        echo json_encode($data['paket_wisata']);
    }

    public function getPaketByPlace() {
        $Place = $this->input->post('Place');
        $this->load->model('M_paket_wisata');
        $data['paket_wisata'] = $this->M_paket_wisata->getPaketByPlace($Place);
        
        echo json_encode($data['paket_wisata']);
    }
    
    public function viewContent()
    {
        redirect('ContentCon','refresh');
    }

    public function viewWishlist()
    {
        redirect('WishlistCon','refresh');
    }

    public function viewProfile()
    {  
        redirect('profile','refresh');
    }

    public function viewContact()
    {
        $this->load->view('Contact.php');
    }

    public function viewHistory()
    {  
        redirect('HistoryCon','refresh');
    }
    
}

/* End of file main.php */
