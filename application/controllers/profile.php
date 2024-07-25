<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_profile');
        $this->load->model('M_user');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index()
    {
        redirect('profile/editprofile');
    }

    public function viewprofile(){
        $data = array('title' => 'profile', 'profile' => $this->M_profile->getprofile($this->session->userdata('ID_User'))->row());
        $this->load->view('ProfilePage', $data);
    }

    public function editprofile(){
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $name = $this->input->post('full_name');
            $dob = $this->input->post('dob');
            $gender = $this->input->post('gender');
            $user_id = $this->session->userdata('ID_User'); // Assuming you have user ID stored in session

            $profile = $this->M_profile->getprofile($this->session->userdata('ID_User'))->num_rows();
            if ($profile > 0) {
                $update_status = $this->M_profile->update($user_id, $phone, $dob, $gender);
            } else {
                $update_status = $this->M_profile->insert($user_id, $phone, $dob, $gender);
            }
            $update_user = $this->M_user->updateprofile($user_id, $name, $email);

            if ($update_user && $update_status) {
                // Update session data
                $this->session->set_userdata('Full_Name', $name);
                $this->session->set_userdata('Email', $email);

                // Jika update berhasil
                $this->session->set_flashdata('message', 'Profile updated successfully');
                redirect('profile/viewprofile'); // Redirect setelah update
            } else {
                // Jika update gagal
                $this->session->set_flashdata('message', 'Profile update failed');
                redirect('profile/viewprofile');
            }
        } else {
            $this->viewprofile();
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login'); // Redirect to login page after logout
    }
}
/* End of file profile.php */
