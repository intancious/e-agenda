<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model', 'm_agenda');
        $this->load->library('Auth');

        $auth = new Auth();
        $auth->is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Agenda";
        $this->load->view('admin/Agenda', $data);
    }

    public function ajax_list()
    {
        $list = $this->m_agenda->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $agenda) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $this->limit_words($agenda->nama_kegiatan, 5) . ' ...';
            $row[] = $agenda->agenda;
            $row[] = $agenda->tanggal;
            $row[] = $agenda->tempat;
            $row[] = $agenda->fullname;
            if ($agenda->status_agenda == 1)
                $row[] = '<small class="label label-secondary"> Selesai </small>';
            elseif ($agenda->status_agenda == 2)
                $row[] = '<small class="label label-danger"> Ditunda </small>';
            elseif ($agenda->status_agenda == 3)
                $row[] = '<small class="label label-warning"> Belum berjalan </small>';
            elseif ($agenda->status_agenda == 4)
                $row[] = '<small class="label label-success"> Sedang berlangsung </small>';

            if ($agenda->status_verifikasi == 1)
                $row[] = '<small class="label label-success"> Disetujui </small>';
            elseif ($agenda->status_verifikasi == 2)
                $row[] = '<small class="label label-danger"> Tidak disetujui </small>';
            elseif ($agenda->status_verifikasi == 3)
                $row[] = '<small class="label label-secondary"> Belum diverifikasi </small>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_agenda->count_all(),
            "recordsFiltered" => $this->m_agenda->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->m_agenda->get_by_id($id);
        $data->tanggal = ($data->tanggal == '0000-00-00') ? '' : $data->tanggal; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }


    public function ajax_upstatus()
    {
        $data = array(
            'status_agenda' => $this->input->post('status_agenda')
        );
        $this->m_agenda->update(array('id_agenda' => $this->input->post('id_agenda')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_verif()
    {
        $data = array(
            'status_verifikasi' => $this->input->post('status_verifikasi')
        );
        $this->m_agenda->update(array('id_agenda' => $this->input->post('id_agenda')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $dihapus = date('Y-m-d H:i:s');
        $data = array(
            'deleted_at' => $dihapus
        );
        // $this->person->delete_by_id($id);
        $this->m_agenda->update(array('id_agenda' => $id), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }

    public  function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
}
