<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('HistoryModel');
        // Load session library for user session management
        $this->load->library('session');
    }

    // Index function to display user transactions
    public function index() {
        // Assume user is logged in and get user ID from session
        $user_id = $this->session->userdata('ID_User');

        // Get user transactions from model
        $data['transactions'] = $this->HistoryModel->get_user_transactions($user_id);

        // Load the view and pass the transactions data
        $this->load->view('History', $data);
    }
    
}
