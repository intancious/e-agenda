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
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('user_level', 'Hak Akses', 'required');
        if ($this->form_validation->run() == true) {
            $data['fullname'] = $this->input->post('fullname');
            $data['email'] = $this->input->post('email');
            $data['password'] = md5($this->input->post('password'));
            $data['user_level_id'] = $this->input->post('user_level');
            $this->User_model->save('users', $data);
            redirect('superadmin/user');
        } else {
            $this->load->view('superadmin/create');
        }
    }
    function edit($id)
    {
        //
        $data['users'] = $this->User_model->getById('users', $id);
        //die(var_export($data['users']));
        $this->load->view('superadmin/edit', $data);
    }
    public function update()
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('user_level', 'Hak Akses', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['fullname'] = $this->input->post('fullname');
            $data['email'] = $this->input->post('email');
            $data['password'] = md5($this->input->post('password'));
            $data['user_level_id'] = $this->input->post('user_level');
            $this->User_model->update('users', $data, $id);
            redirect('superadmin/user');
        } else {
            $id = $this->input->post('id');
            $data['users'] = $this->User_model->getById('users', $id);
            $this->load->view('superadmin/edit', $data);
        }
    }
    function delete($id)
    {
        $this->User_model->delete('users', $id);
        redirect('superadmin/user');
    }
}
