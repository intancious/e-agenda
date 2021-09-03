<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->helper('url', 'form');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$this->load->view('daftar');
	}

	public function simpan()
	{

		$rules = array(
			array(
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
				),
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|callback_check_email_exists',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
				),
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
				),
			),
			array(
				'field' => 'password2',
				'label' => 'Konfirmasi Password',
				'rules' => 'matches[password]',
				'errors' => array(
					'matches' => '%s tidak sama dengan inputan Password',
				),

			),
			array(
				'field' => 'jabatan',
				'label' => 'Jabatan',
				'rules' => 'required',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
				),
			),
			array(
				'field' => 'opd',
				'label' => 'OPD',
				'rules' => 'required|callback_check_email_exists',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
				),
			),
		);

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('daftar');
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->Daftar_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'Anda berhasil mendaftar, silahkan login');

			redirect('login');
		}
	}

	// Check if email exists
	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists', 'Email Sudah dipakai. Silahkan gunakan email lain');
		if ($this->Daftar_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}
}
