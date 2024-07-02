<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_auth extends CI_Model {

    public function getUser($email) {
        return $this->db->get_where('user', ['Email' => $email]);
    }

    public function config($email, $token, $type) {
        $config = [
            'useragent' => 'Codeigniter',
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'Venture@gmail.com',
            'smtp_pass' => 'fyuv sknz dpyh pgla',
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'smtp_timeout' => 30,
            'wordwrap' => TRUE
        ];

        $this->email->initialize($config);
        $this->email->from('Venture@gmail.com', 'Venture');
        $this->email->to($email);

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message(
                '<html lang="en">
                <head>
                  <style>
                    body { font-family: "Poppins", sans-serif; }
                    .container { margin: 5px auto; width: 80vh; padding: 2% 3%; }
                    .judul { margin-top: 30px; font-weight: 600; text-align: center; color: #0d6efd; }
                    .sapa { font-weight: 600; margin-bottom: 25px; font-size: 30px; }
                    .button { margin: 30px auto; }
                    .button .link { background-color: #0d6efd; padding: 10px 20px; border: 1px solid #0d6efd; border-radius: 5px; color: #ffffff; text-decoration: none; font-weight: 600; text-align: center; }
                    .button .link:hover { background-color: #ffffff; font-weight: 600; color: #0d6efd; border: 1px solid #0d6efd; transition: background-color 0.5s ease-in-out; }
                    .pembatas { margin: 7px 0px; }
                    .link-alt { color: #0d6efd; }
                  </style>
                </head>
                <body>
                  <h1 class="judul">Bali Job Finder</h1>
                  <div class="container">
                    <p class="sapa">Hello!</p>
                    <p>Please click the button below to verify your email</p>
                    <div class="button">
                      <a href="'.base_url().'Auth/verify?email='.$email.'&token='.$token.'" class="link">Verify Now</a>
                    </div>
                    <p>Regards, <br> Bali Job Finder</p>
                    <hr class="pembatas">
                    <p class="alt">
                      If you have trouble clicking the "Verify Now" button, copy and paste the URL below into your web browser:
                      <a href="'.base_url().'Auth/verify?email='.$email.'&token='.$token.'" class="link-alt">'.base_url().'Auth/verify?email='.$email.'&token='.$token.'</a>
                    </p>
                  </div>
                </body>
                </html>'
            );
        }

        if (!$this->email->send()) {
            log_message('error', 'Email not sent: '.$this->email->print_debugger());
        }
    }

    public function add($email, $pass, $name) {
        $token = base64_encode(random_bytes(32)); // Increased token length for better security
        $datausers = [
            'Email' => $email,
            'Password' => $pass,
            'Role' => 'User',
            'Full_Name' => $name,
            'token' => $token,
            // 'email_verified' => null
        ];

        $this->db->trans_start();
        $this->db->insert('user', $datausers);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            log_message('error', 'User registration transaction failed.');
        } else {
            $this->db->trans_commit();
            $this->config($email, $token, 'verify');
        }
    }

    public function email_verified($id) {
        $this->db->set('email_verified', 'NOW()', FALSE);
        $this->db->where('ID_User', $id);
        $this->db->update('user');
    }
}
?>
