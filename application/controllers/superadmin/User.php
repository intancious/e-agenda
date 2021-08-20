<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'm_user');
        $this->m_user->method();
    }

    public function index()
    {
        $data['title'] = "User";
        $this->load->view('superadmin/user', $data);
    }
}
