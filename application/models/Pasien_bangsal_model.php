<?php
class Pasien_bangsal_model extends CI_Model {

    private $primary_key = 'id';
    private $table_name = 'pasien_bangsal';

	function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->select('pasien_bangsal.*, residen.nama_residen, konsulen.nama_konsulen');
        $this->db->from($this->table_name);
        $this->db->join('residen', 'residen.id = pasien_bangsal.id_residen', 'left');
        $this->db->join('konsulen', 'konsulen.id = pasien_bangsal.id_konsulen', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_for_residen($id_residen) {
        $this->db->select('pasien_bangsal.*, konsulen.nama_konsulen');
        $this->db->from($this->table_name);
        $this->db->where('id_residen', $id_residen);
        $this->db->join('konsulen', 'konsulen.id = pasien_bangsal.id_konsulen', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_for_konsulen($id_konsulen) {
        $this->db->select('pasien_bangsal.*, residen.nama_residen');
        $this->db->from($this->table_name);
        $this->db->where('pasien_bangsal.id_konsulen', $id_konsulen);
        $this->db->join('residen', 'residen.id = pasien_bangsal.id_residen', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    function get_data($id) {
        $this->db->select('pasien_bangsal.*, residen.nama_residen, konsulen.nama_konsulen');
        $this->db->from($this->table_name);
        $this->db->where('pasien_bangsal.id', $id);
        $this->db->join('residen', 'residen.id = pasien_bangsal.id_residen', 'left');
        $this->db->join('konsulen', 'konsulen.id = pasien_bangsal.id_konsulen', 'left');
        $query = $this->db->get();
        return $query->row();
    }

    function get_paraf($id) {
        $this->db->select('paraf_konsulen');
        $this->db->from($this->table_name);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row()->paraf_konsulen;
    }

    function count_all() {
        return $this->db->count_all($this->table_name);
    }

    function count_all_konsulen($id_konsulen)
    {
        $query = $this->db->query("SELECT COUNT( id_konsulen ) as total FROM pasien_bangsal WHERE id_konsulen = '" . $id_konsulen . "'");
        return $query->row()->total;
    }

    function count_all_paraf($id_konsulen) {
        $query = $this->db->query("SELECT COUNT( id_konsulen ) as jumlah_paraf FROM pasien_bangsal WHERE id_konsulen = '" . $id_konsulen . "' AND paraf_konsulen='1'");
        return $query->row()->jumlah_paraf;
    }

    function fetch_data($limit, $start) {
        $this->db->order_by('tgl_mulai', 'desc');
        $this->db->limit($limit, $start);
        $this->db->join('konsulen', 'konsulen.id = pasien_bangsal.id_konsulen', 'left');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function insert($data) {
        return $this->db->insert($this->table_name, $data);
    }

    function edit($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id) {
        return $this->db->delete($this->table_name, array('id' => $id));
    }
}
