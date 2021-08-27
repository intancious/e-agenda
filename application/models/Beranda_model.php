<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_model extends CI_Model
{

    function tampil_agenda($id)
    {
        // Kalo join usahakan jangan select *. OK!

        $this->db->select('
        tb_agenda.*,
        users.fullname as pembuat
        ');
        $this->db->from('tb_agenda');
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        // $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        // $this->db->where('tb_agenda.deleted_at', null);
        $this->db->where(array("id_agenda" => $id, 'tb_agenda.deleted_at' => null));
        $query = $this->db->get();

        if (count($query->result())) {
            $query = $query->result();
        } else {
            $query = array();
        }


        return $query;
    }

    function agenda_admin_user()
    {
        $this->db->select('tb_agenda.*, users.fullname, user_levels.user_level');
        $this->db->from('tb_agenda');
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        $this->db->where('tb_agenda.deleted_at', null);
        $query = $this->db->get();

        return $query->result();
    }
}
