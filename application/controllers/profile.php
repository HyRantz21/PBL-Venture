<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_profile');
    }

    public function index() {
        $data['profile'] = $this->Profile_model->get_profile();
        $this->load->view('profile_view', $data);
    }

    public function update() {
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['profile'] = $this->Profile_model->get_profile();
            $this->load->view('profile_view', $data);
        } else {
            $profile_data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender')
            );

            $this->Profile_model->update_profile($profile_data);
            redirect('profile');
        }
    }
}
