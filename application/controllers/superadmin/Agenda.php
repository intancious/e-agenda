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
        $this->load->view('superadmin/Agenda', $data);
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
            $row[] = $this->tgl_indo(date($agenda->tanggal));
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

            // if ($agenda->naskah)
            //     $row[] = '<a href="' . base_url('upload/' . $agenda->naskah) . '" target="_blank"> ' . $agenda->naskah . '  </a>';
            // else
            //     $row[] = '(Tidak ada naskah)';
            //add html for action
            $row[] = '<a class="btn btn-info btn-sm" href="javascript:void(0)" title="Edit" onclick="edit_agenda(' . "'" . $agenda->id_agenda . "'" . ')"><i class="fas fa-edit"></i></a>
				  <a class="btn btn-danger btn-sm" href="javascript:void(0)" title="Hapus" onclick="hapus_agenda(' . "'" . $agenda->id_agenda . "'" . ')"><i class="fas fa-trash"></i></a>
                  <a class="btn btn-warning btn-sm" href="javascript:void(0)" title="Update Status" onclick="edit_status(' . "'" . $agenda->id_agenda . "'" . ')"><i class="fas fa-tasks"></i></a>
                  <a class="btn btn-success btn-sm" href="javascript:void(0)" title="Verifikasi" onclick="verif_agenda(' . "'" . $agenda->id_agenda . "'" . ')"><i class="fas fa-check"></i></a>';

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

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'kategori' => $this->input->post('kategori'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'agenda' => $this->input->post('agenda'),
            'sub_agenda' => $this->input->post('sub_agenda'),
            'tanggal' => $this->input->post('tanggal'),
            'pukul' => $this->input->post('pukul'),
            'tempat' => $this->input->post('tempat'),
            'pakaian' => $this->input->post('pakaian'),
            'undangan' => $this->input->post('undangan'),
            'peran_pimpinan' => $this->input->post('peran_pimpinan'),
            'urutan_acara' => $this->input->post('urutan_acara'),
            'tata_ruangan' => $this->input->post('tata_ruangan'),
            'pihak_terkait' => $this->input->post('pihak_terkait'),
            'petugas_protokol' => $this->input->post('petugas_protokol'),
            'catatan' => $this->input->post('catatan'),
            'status_agenda' => 3,
            'status_verifikasi' => 3,
            'user_id' => $this->session->userdata('id')
        );

        if (!empty($_FILES['sambutan']['name'])) {
            $upload = $this->_do_uploadsa();
            $data['sambutan'] = $upload;
        }
        if (!empty($_FILES['surat']['name'])) {
            $upload = $this->_do_uploadsu();
            $data['surat'] = $upload;
        }
        // if (!empty($_FILES['tata_ruangan']['name'])) {
        //     $upload = $this->_do_uploadtr();
        //     $data['tata_ruangan'] = $upload;
        // }

        $insert = $this->m_agenda->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $this->_validate();
        $data = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'kategori' => $this->input->post('kategori'),
            'penyelenggara' => $this->input->post('penyelenggara'),
            'agenda' => $this->input->post('agenda'),
            'sub_agenda' => $this->input->post('sub_agenda'),
            'tanggal' => $this->input->post('tanggal'),
            'pukul' => $this->input->post('pukul'),
            'tempat' => $this->input->post('tempat'),
            'pakaian' => $this->input->post('pakaian'),
            'undangan' => $this->input->post('undangan'),
            'peran_pimpinan' => $this->input->post('peran_pimpinan'),
            'urutan_acara' => $this->input->post('urutan_acara'),
            'tata_ruangan' => $this->input->post('tata_ruangan'),
            'pihak_terkait' => $this->input->post('pihak_terkait'),
            'petugas_protokol' => $this->input->post('petugas_protokol'),
            'catatan' => $this->input->post('catatan'),
        );

        if (!empty($_FILES['sambutan']['name'])) {
            $upload = $this->_do_uploadsa();

            //delete file
            $agenda = $this->m_agenda->get_by_id($this->input->post('id_agenda'));
            if (file_exists('uploads/files/' . $agenda->sambutan) && $agenda->sambutan)
                unlink('uploads/files/' . $agenda->sambutan);

            $data['sambutan'] = $upload;
        }

        if (!empty($_FILES['surat']['name'])) {
            $upload = $this->_do_uploadsu();

            //delete file
            $agenda = $this->m_agenda->get_by_id($this->input->post('id_agenda'));
            if (file_exists('uploads/files/' . $agenda->surat) && $agenda->surat)
                unlink('uploads/files/' . $agenda->surat);

            $data['surat'] = $upload;
        }

        // if (!empty($_FILES['tata_ruangan']['name'])) {
        //     $upload = $this->_do_uploadtr();

        //     //delete file
        //     $agenda = $this->m_agenda->get_by_id($this->input->post('id_agenda'));
        //     if (file_exists('uploads/files/' . $agenda->tata_ruangan) && $agenda->tata_ruangan)
        //         unlink('uploads/files/' . $agenda->tata_ruangan);

        //     $data['tata_ruangan'] = $upload;
        // }

        $this->m_agenda->update(array('id_agenda' => $this->input->post('id_agenda')), $data);
        echo json_encode(array("status" => TRUE));
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

    private function _do_uploadsa()
    {
        $config['upload_path']          = 'uploads/files/';
        $config['allowed_types']        = 'pdf|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 20000; //set max size allowed in Kilobyte
        // $config['max_width']            = 1000; set max width image allowed
        // $config['max_height']           = 1000; set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('sambutan')) //upload and validate
        {
            $data['inputerror'][] = 'sambutan';
            $data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('', ''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

    private function _do_uploadsu()
    {
        $config['upload_path']          = 'uploads/files/';
        $config['allowed_types']        = 'pdf|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 20000; //set max size allowed in Kilobyte
        // $config['max_width']            = 1000; set max width image allowed
        // $config['max_height']           = 1000; set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('surat')) //upload and validate
        {
            $data['inputerror'][] = 'surat';
            $data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('', ''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

    private function _do_uploadtr()
    {
        $config['upload_path']          = 'uploads/files/';
        $config['allowed_types']        = 'pdf|jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 2000; //set max size allowed in Kilobyte
        // $config['max_width']            = 1000; // set max width image allowed
        // $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('tata_ruangan')) //upload and validate
        {
            $data['inputerror'][] = 'tata_ruangan';
            $data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('', ''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('nama_kegiatan') == '') {
            $data['inputerror'][] = 'nama_kegiatan';
            $data['error_string'][] = 'Nama kegiatan tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('kategori') == '') {
            $data['inputerror'][] = 'kategori';
            $data['error_string'][] = 'Kategori tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('penyelenggara') == '') {
            $data['inputerror'][] = 'penyelenggara';
            $data['error_string'][] = 'Penyelenggara tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('agenda') == '') {
            $data['inputerror'][] = 'agenda';
            $data['error_string'][] = 'Agenda tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('tanggal') == '') {
            $data['inputerror'][] = 'tanggal';
            $data['error_string'][] = 'Tanggal tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('pukul') == '') {
            $data['inputerror'][] = 'pukul';
            $data['error_string'][] = 'Pukul tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('tempat') == '') {
            $data['inputerror'][] = 'tempat';
            $data['error_string'][] = 'Tempat tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('pakaian') == '') {
            $data['inputerror'][] = 'pakaian';
            $data['error_string'][] = 'Pakaian tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('undangan') == '') {
            $data['inputerror'][] = 'undangan';
            $data['error_string'][] = 'Undangan tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('peran_pimpinan') == '') {
            $data['inputerror'][] = 'peran_pimpinan';
            $data['error_string'][] = 'Peran pimpinan tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($this->input->post('urutan_acara') == '') {
            $data['inputerror'][] = 'urutan_acara';
            $data['error_string'][] = 'Urutan acara tidak boleh kosong';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
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
