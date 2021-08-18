<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{


    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('superadmin/Beranda', $data);
    }
}
