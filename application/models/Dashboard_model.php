<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public $table = 'users';
    public $id = 'UserID';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_by_id($userid)
    {
        $query = $this->db->get_where($this->table, array($this->id => $userid));
        return $query->row_array();
    }

    public function insert_user($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_user($user_id, $data)
    {
        $this->db->where($this->id, $user_id);
        return $this->db->update($this->table, $data);
    }

    public function delete_user($user_id)
    {
        $this->db->where($this->id, $user_id);
        return $this->db->delete($this->table);
    }
}