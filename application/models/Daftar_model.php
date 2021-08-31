<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    public function register($enc_password)
    {
        // User data array
        $data = array(
            'user_level_id' => 3,
            'email' => $this->input->post('email'),
            'fullname' => $this->input->post('nama'),
            'password' => $enc_password,
        );

        // Insert user
        return $this->db->insert('users', $data);
    }


    // Check email exists
    public function check_email_exists($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
