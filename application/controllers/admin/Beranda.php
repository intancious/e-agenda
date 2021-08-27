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
        // echo json_encode($list);
        $data['title'] = "Beranda";
        $data['list'] = $this->m_beranda->agenda_admin_user();
        $this->load->view('admin/Beranda', $data);
    }

    public function detail()
    {
        $data['title'] = "Detail Agenda";
        $this->load->view('admin/Detail', $data);
    }
}
