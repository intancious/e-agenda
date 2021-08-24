<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Beranda_model', 'm_beranda');
        $this->load->library('Auth');

        $auth = new Auth();
        $auth->is_logged_in();
    }

    public function index()
    {
        $list = $this->m_beranda->tampil_agenda();
        echo json_encode($list);
    }
}
