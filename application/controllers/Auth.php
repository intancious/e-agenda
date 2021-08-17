<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }

    public function cek_login()
    {
        $data = array(
            'email' => $this->input->post('email', TRUE),
            'password' => md5($this->input->post('password', TRUE))
        );
        $this->load->model('model_user'); // load model_user
        $hasil = $this->model_user->cek_user($data);
        $data = array();
        if ($hasil->num_rows() == 1) {

            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['uid'] = $sess->uid;
                $sess_data['email'] = $sess->email;
                $sess_data['level'] = $sess->level;
                die(var_dump($sess->level));
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == 'admin') {
                $data['dir'] = 'admin';
                $data['pesan'] = null;
            } elseif ($this->session->userdata('level') == 'member') {
                $data['dir'] = 'admin';
                $data['pesan'] = null;
            }
        } else {
            $data['pesan'] = 'Gagal login: Cek email, password!';
            $data['dir'] = '';
            // echo "<script>alert('Gagal login: Cek email, password!');history.go(-1);</script>";
        }
        echo $data;
    }
}
