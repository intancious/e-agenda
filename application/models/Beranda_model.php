<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_model extends CI_Model
{

    function tampil_agenda()
    {
        $this->db->select('*');
        $this->db->from('tb_agenda');
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        $this->db->where('tb_agenda.deleted_at', null);
        $query = $this->db->get();

        return $query->result();
    }
}
