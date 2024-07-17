<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

    public function get_profile($id) {
        return $this->db->get_where('profile', array('id' => $id))->row_array();
    }

    public function update_profile($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('profile', $data);
    }
}
?>
