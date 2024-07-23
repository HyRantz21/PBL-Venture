<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

    public function getprofile($user_id){
        return $this->db->get_where('profile', ['fk_profile_user' => $user_id]);
    }

    public function update($user_id, $phone, $dob, $gender) {
        $dataprofile = [
            'phone' => $phone,
            'dob' => $dob,
            'gender' => $gender
        ];

        // Update table profile
        $this->db->where('fk_profile_user', $user_id);
        return $this->db->update('profile', $dataprofile);

    }
    public function insert($user_id, $phone, $dob, $gender) {
        $dataprofile = [
            'fk_profile_user' => $user_id,
            'phone' => $phone,
            'dob' => $dob,
            'gender' => $gender
        ];

        // Update table profile
        return $this->db->insert('profile', $dataprofile);

    }
}
/* End of file M_profile.php */
