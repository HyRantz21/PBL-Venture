<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    

    class m_auth extends CI_Model {
    
        
        public function __construct()
        {
            parent::__construct();
            
        }

        public function validation(){
            return[
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|min_length[3]|max_length[32]|is_unique[user.username]',
                ],
                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[user.email]',
                ],
                [
                    'field' => 'nama_lengkap',
                    'label' => 'NamaLengkap',
                    'rules' => 'required',
                ],
                [
                    'field' => 'tanggal_lahir',
                    'label' => 'TanggalLahir',
                    'rules' => 'required',
                ],
                [
                    'field' => 'alamat',
                    'label' => 'Alamat',
                    'rules' => 'required',
                ],
                [
                    'field' => 'notelp',
                    'label' => 'Notelp',
                    'rules' => 'required',
                ],
                [
                    'field' => 'password',
                    'label' => 'password',
                    'rules' => 'required|min_length[3]',
                ],
                [
                    'field' => 'verify_password',
                    'label' => 'VerifyPassword',
                    'rules' => 'required|min_length[3]',
                ],
                
            ];
        }

        public function verify($token) {
            // Check if 'kode_verif' exists
            $user = $this->db->get_where('user', ['kode_verif' => $token])->row();
        
            if ($user && $user->isVerif == 0) {
                // 'kode_verif' exists and 'isVerif' is not 1, proceed with the update
                $this->db->where('kode_verif', $token)
                         ->update('user', ['isVerif' => 1]);
        
                // Check if the update was successful
                $condition = 'verif';
            } elseif($user && $user->isVerif == 1) {
                // 'kode_verif' doesn't exist or 'isVerif' is already 1, no need to update
                $condition = 'already_verif';
            } else{
                $condition = 'not_found';
            }
        
            return $condition;
        }
        

        public function add(){
            $kode = random_string('alnum', 20);
            $role = 'user';
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'role' => $role,
                'kode_verif' => $kode,
                'email' => $this->input->post('email'),
                'isVerif' => 0
            );
            $result = $this->db->insert('user', $data);
            if ($result){
                $mailAddress  = array(
                    'email' => $data['email'],
                    'kode_verif' => $data['kode_verif']
                );
                return $mailAddress;
            }
        }

        public function mail($token, $email){

             //link
             $verificationLink = "localhost/banksampah/auth/verify?token={$token}"; // Replace with your actual verification link
             $message = "
             <html>
             <head>
               <title>Email Verification</title>
               <style>
                 body {
                   font-family: 'Arial', sans-serif;
                   background-color: #131313;
                   color: #333;
                 }
                 .container {
                   max-width: 600px;
                   margin: 0 auto;
                   padding: 20px;
                   background-color: #fff;
                   border-radius: 5px;
                   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                 }
                 h1 {
                   color: #557C55;
                 }
                 p {
                   margin-bottom: 20px;
                 }
                 .verification-link {
                   display: inline-block;
                   padding: 10px 20px;
                   background-color: #557C55;
                   color: #fff;
                   text-decoration: none;
                   border-radius: 3px;
                 }
               </style>
             </head>
             <body>
               <div class='container'>
                 <h1>Email Verification</h1>
                 <p>Dear user,</p>
                 <p>Please click the following link to verify your email address:</p>
                 <a href='$verificationLink' class='verification-link'>Verify Email</a>
               </div>
             </body>
             </html>
             ";



             //config
             $config['useragent'] = "Codeigniter";
             $config['mailpath'] = "usr/bin/sendmail";
             $config['protocol'] = "smtp";
             $config['smtp_host'] = "smtp.gmail.com";
             $config['smtp_port'] = "465";
             $config['smtp_user'] = "igowisnuchannel@gmail.com";
             $config['smtp_pass'] = "envz xfke agmy mnqa";
             $config['smtp_crypto'] = "ssl";
             $config['charset'] = "utf-8";
             $config['mailtype'] = "html";
             $config['newline'] = "\r\n";
             $config['smtp_timeout'] = 30;
             $config['wordwrap'] = TRUE;
 
             //set
             $this->email->initialize($config);
             $this->email->from('no-replay@igowisnuchannel@gmail.com','BANK SAMPAH');
             $this->email->to($email);
             $this->email->subject("verifikasi email");
             $this->email->message($message);
 
             //check
             if($this->email->send()){
                 Return "email terkirim ke $email";
             } else{
                 Return "email gagal terkirim";
             }

        }
                
        public function registerTabungan($id){
            date_default_timezone_set('Asia/Manila');
            $data = array(
                'id_user_nasabah' => $id,
                'saldo' => '0',
                'tgl_buka_rekening' => date('y-m-d')
            );

            $result = $this->db->insert('tabungan', $data);
            return $result;
        }

        public function getUser($token){
            $query = $this->db->get_where('user', array('kode_verif' => $token));
            if ($query->num_rows() > 0) {
                $result = $query->row_array();
                return $result['id_user'];
            } else {
                // Record not found
                return null;
            }
        }

        public function checkUser($username){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('isVerif', 1);
            $user = $this->db->get();
            return $user;
        }
    
    }
    
    /* End of file m_auth.php */
    
?>