<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get_all_admins()
    {
     
        $query = $this->db->get_where('user', ['Role' => 'Admin']);
        return $query->result_array();
    }
}
