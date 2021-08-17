<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('Auth');
    }

    function index()
    {
        $this->load->view('login');
    }

    function submit()
    {
        $auth = new Auth();

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $error_message = $auth->login($email, $password);
        //die(var_export($error_message));

        if (empty(trim($error_message['pesan']))) {
            // redirect('home');
            //die(var_export($error_message['data']['user_level']));
            redirect(strtolower($error_message['data']['user_level']) . '/home');
        } else {
            $this->session->set_flashdata('error_message', $error_message['pesan']);
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
