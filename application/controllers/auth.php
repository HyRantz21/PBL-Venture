<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class auth extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_auth');
            
        }        

        public function index()
        {
            $this->load->view('banksampah/login');
            
        }

        public function login(){
            $this->load->view('banksampah/login');
        }

        public function regisGuest(){
            $this->load->view('banksampah/regisGuest');
        }

        public function mail(){
            $rules = $this->m_auth->validation();
            $this->form_validation->set_rules($rules);
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('banksampah/v_register');
            } else{
                $mailCode = $this->m_auth->add();
                $email = $mailCode['email'];
                $kode_verif = $mailCode['kode_verif'];
                $data['verif'] = $this->m_auth->mail($kode_verif, $email);

                $this->load->view('banksampah/Verifikasi', $data);
            }

        }

        public function logout(){
            session_destroy();
            redirect('auth');
        }

        public function guestAccess(){
            $sess = array(
                'username' => 'guest',
                'role' => 'guest'
            );
            $this->session->set_userdata($sess);
            redirect('home');
        }

        public function cekLogin(){
            $rules = $this->m_auth->validation();
            $this->form_validation->set_rules($rules);

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = $this->m_auth->checkUser($username);

            if ($data->num_rows() == 1) {
                echo 'ada';
                foreach($data->result_array() as $key) {
                    if(password_verify($password, $key['password'])){
                        $data = $data->result_array();
                        $sess = array(
                            'id' => $data[0]['id_user'],
                            'username' => $data[0]['username'],
                            'role' => $data[0]['role'],
                            'admin_name' => $data[0]['admin_name']
                        );
                        $this->session->set_userdata($sess);
                        $this->session->set_flashdata('alert','login berhasil!');
                        if($sess['role'] == 'admin'){
                            redirect('dashboard');
                        } else{
                            redirect('home');
                        }
                    }
                    else{
                        redirect('auth');
                    }
                }
            }else{
                $this->session->set_flashdata('failed', 'Uername/Password salah');
                redirect('auth');
                
            }
        }

        public function goRegister(){
            $this->load->view('banksampah/v_register');
        }

        public function verify() {
            $token = $this->input->get('token');
            $verifyCheck = $this->m_auth->verify($token);

            if ($verifyCheck == 'verif'){
                $userId = $this->m_auth->getUser($token);
                $bukaTabungan = $this->m_auth->registerTabungan($userId);
                if($bukaTabungan){
                    $this->session->set_flashdata('success','Verifikasi berhasil'); 
                    redirect('auth/login');
                } else{
                    $this->session->set_flashdata('failed','Terjadi masalah pada sistem'); 
                    redirect('auth/login');
                }
            } elseif($verifyCheck == 'already_verif'){
                $this->session->set_flashdata('failed','Akun sudah diverifikasi');
                redirect('auth/login');
            } else{
                $this->session->set_flashdata('failed','Akun sudah diverifikasi');
                redirect('auth/login');
            }
        }
        
        
    
    }
    
    /* End of file Controllername.php */
    
?>