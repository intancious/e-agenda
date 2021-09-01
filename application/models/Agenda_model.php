<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{

    var $table = 'tb_agenda';
    var $column_order = array('nama_kegiatan', 'tempat', 'tanggal', null); //set column field database for datatable orderable
    var $column_search = array('nama_kegiatan', 'tanggal', 'tempat', 'fullname'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id_agenda' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll($opt)
    {
        $tgl = new DateTime("now");

        $curr_date = $tgl->format('Y-m-d ');
        $where = array();
        if (isset($opt["waktu"]) && isset($opt["agenda"])) {
            $this->db->select('*');
            $this->db->where('status_agenda >=', 1);
            $this->db->where('tanggal =', $opt["waktu"]);
            $this->db->where('agenda =', $opt["agenda"]);
            $this->db->order_by('tanggal ASC'); //DESC untuk sorting dari terbesar -> terkecil
            $result = $this->db->get('tb_agenda')->result();
        } else if (isset($opt["waktu"])) {
            $this->db->select('*');
            $this->db->where('status_agenda >=', 1);
            $this->db->where('tanggal =', $opt["waktu"]);
            $this->db->order_by('tanggal ASC'); //DESC untuk sorting dari terbesar -> terkecil
            $result = $this->db->get('tb_agenda')->result();
        } else if (isset($opt["agenda"])) {
            $this->db->select('*');
            $this->db->where('status_agenda !=', 1);
            $this->db->where('agenda =', $opt["agenda"]);
            $this->db->order_by('tanggal ASC'); //DESC untuk sorting dari terbesar -> terkecil
            $result = $this->db->get('tb_agenda')->result();
        } else {
            $this->db->select('*');
            $this->db->where('status_agenda !=', 1);
            $this->db->order_by('tanggal ASC');
            $result = $this->db->get('tb_agenda')->result();
        }

        return $result;
    }

    private function _get_datatables_query()
    {

        $this->db->select('tb_agenda.*, users.fullname, user_levels.user_level');
        $this->db->from($this->table);
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        $this->db->where('tb_agenda.deleted_at', null);


        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->db->select('tb_agenda.*, users.fullname, user_levels.user_level');
        $this->db->from($this->table);
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        $this->db->where('tb_agenda.id_agenda', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_lihat_id($id)
    {
        $this->db->select('tb_agenda.*, users.fullname, user_levels.user_level');
        $this->db->from($this->table);
        $this->db->join('users', 'users.id = tb_agenda.user_id', 'left');
        $this->db->join('user_levels', 'user_levels.id=users.user_level_id', 'left');
        $this->db->where('tb_agenda.id_agenda', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id_agenda', $id);
        $this->db->delete($this->table);
    }
}
