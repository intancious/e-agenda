<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function data_users()
    {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query;
    }
    public function data_levels()
    {
        $this->db->select('*');
        $this->db->from('user_levels');
        $this->db->join('users', 'users.id = user_levels.id');
        $query = $this->db->get();
        return $query;
    }
    function join()
    {
        $this->db->select('*');
        $this->db->from('user_levels');
        $this->db->join('users', 'users.id = user_levels.id');
        $query = $this->db->get();
        return $query;
    }
    public function save($table, $data)
    {
        // return $this->db->insert('users', $data);
        $this->db->insert($table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
}
