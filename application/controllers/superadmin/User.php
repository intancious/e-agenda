<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('Auth');
        $auth = new Auth();
        $auth->is_logged_in();
    }

    public function index()
    {
        $data['title'] = "User";
        $data['users'] = $this->User_model->data_users()->result();
        $data['user_levels'] = $this->User_model->data_levels()->result();
        $data['join'] = $this->User_model->join()->result();
        $this->load->view('superadmin/user', $data);
    }
    public function create()
    {
        $this->load->view('superadmin/create');
    }
    public function save()
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique');
        $this->form_validation->set_rules('password', 'Password', 'required|password');
        $this->form_validation->set_rules('user_level', 'Hak Akses', 'required');
        if ($this->form_validation->run() == true) {
            $data['fullname'] = $this->input->post('fullname');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['user_level'] = $this->input->post('user_level');
            $this->User_model->save($data, 'users');
            redirect('superadmin/user');
        } else {
            $this->load->view('superadmin/create');
        }
    }

    function edit($id)
    {
        $data['users'] = $this->User_model->getById($id);
        $this->load->view('superadmin/edit', $data);
    }
}
