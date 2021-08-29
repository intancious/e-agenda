<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Auth');
        // if ($this->session->userdata('email') == "") {
        //     redirect('auth');
        // }
        $auth = new Auth();
        $auth->is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('superadmin/Beranda', $data);
    }

    public function detail($id = null)
    {
        $data['title'] = "Detail Agenda";
        $this->load->model('Beranda_model');
        $data['agenda'] = $this->Beranda_model->tampil_agenda($id);
        if (count($data['agenda'])) {
            $data['agenda'] = $data['agenda'][0];
        } else {
            redirect(base_url("superadmin/beranda"));
        }

        // var_dump($data['agenda']);
        // die;
        $this->load->view('superadmin/Detail', $data);
    }

    public function getDataAgenda()
    {
        $this->load->model('agenda_model');
        $param = $this->input->post();
        $data = $this->agenda_model->getAll($param);
        echo json_encode($data);
    }
}
