<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_profile');
        $this->load->helper('url');
    }

    // Load the profile form with no ID
    public function index() {
        $data = array('title' => 'Edit Profile', 'profile' => null);
        $this->load->view('ProfilePage', $data);
    }

    // Load the profile form with an ID
    public function edit_profile($id = null) {
        if (!isset($id) || !is_numeric($id)) {
            show_404();
        }

        $data['profile'] = $this->M_profile->get_profile($id);
        if (empty($data['profile'])) {
            show_404();
        }

        $data['title'] = 'Edit Profile';
        $this->load->view('ProfilePage', $data);
    }

    // Process the form submission and update profile
    public function process_edit($id = null) {
        if (!isset($id) || !is_numeric($id)) {
            show_404();
        }

        $data = [
            'Email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'Full_name' => $this->input->post('full_name'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender')
        ];

        $this->M_profile->update_profile($id, $data);
        redirect('profile/edit_profile/' . $id);
    }
}
?>
