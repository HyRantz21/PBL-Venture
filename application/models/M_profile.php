<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

    public function insert_profile($data) {
        $this->db->insert('profile', $data);
        return $this->db->insert_id();
    }

    public function update_profile($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('profile', $data);

        // Now update the user table
        $this->db->select('fk_id_user');
        $this->db->where('id', $id);
        $profile = $this->db->get('profile')->row();

        if ($profile) {
            $user_data = array(
                'Full_Name' => $data['Full_Name'],
                'Email' => $data['Email']
            );

            $this->db->where('ID_User', $profile->fk_id_user);
            return $this->db->update('user', $user_data);
        }

        return false;
    }
}
