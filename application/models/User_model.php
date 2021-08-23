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
        $this->db->join('users', 'users.user_level_id = user_levels.id');
        $query = $this->db->get();
        return $query;
    }
    function join()
    {
        $this->db->select('*');
        $this->db->from('user_levels');
        $this->db->join('users', 'users.user_level_id = user_levels.id');
        $query = $this->db->get();
        return $query;
    }
    public function save($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function getById($table, $id)
    {
        $this->db->where("users.id", $id);
        $this->db->select('*');
        $this->db->from('user_levels');
        $this->db->join('users', 'users.user_level_id = user_levels.id');
        $query = $this->db->get()->row();
        return $query;
    }
    public function update($table, $data, $id)
    {
        return $this->db->update($table, $data, array('id' => $id));
    }
    public function delete($table, $id)
    {
        return $this->db->delete($table, array("id" => $id));
    }
}
