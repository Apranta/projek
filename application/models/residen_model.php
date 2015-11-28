<?php
class Residen_model extends CI_Model {

    private $primary_key = 'id';
    private $table_name = 'residen';

	function __construct() {
        parent::__construct();
    }

    function insert_residen_table($username, $email_simpan, $no_hp_simpan) {
        $query = $this -> db -> query("INSERT INTO residen (`username`,`email`,`no_hp`) VALUES ('{$username}','{$email_simpan}','{$no_hp_simpan}')");
        return $query;
    }

    function count_residen() {
        $this -> db -> from('residen');
        return $this -> db -> count_all_results();
    }

    function get_residen_id($username) {
        $query = $this -> db -> query("SELECT id FROM residen WHERE username = '{$username}'");
        return $query->row()->id;
    }

    function get_residen_name($username) {
        $query = $this -> db -> query("SELECT nama_residen FROM residen WHERE username = '{$username}'");
        return $query->row()->nama_residen;
    }

    function get_residen_tingkat($username) {
        $query = $this -> db -> query("SELECT tingkat FROM residen WHERE username = '{$username}'");
        return $query->row()->tingkat;
    }

    function get_residen_foto($username) {
        $query = $this -> db -> query("SELECT foto_residen FROM residen WHERE username = '{$username}'");
        return $query->row()->foto_residen;   
    }

    function get_residen_tglmasuk($username) {
        $query = $this -> db -> query("SELECT tgl_masuk FROM residen WHERE username = '{$username}'");
        return $query->row()->tgl_masuk;   
    }

    function get_all() {
        $this->db->select('residen.*, konsulen.nama_konsulen');
        $this->db->join('konsulen', 'konsulen.id = residen.id_konsulen', 'left');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_all_for_konsulen($id_konsulen) {
        $this->db->select('residen.*, konsulen.nama_konsulen');
        $this->db->where('residen.id_konsulen', $id_konsulen);
        $this->db->join('konsulen', 'konsulen.id = residen.id_konsulen', 'left');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_data($id) {
        $this->db->select('residen.*, konsulen.nama_konsulen');
        $this->db->where('residen.id', $id);
        $this->db->join('konsulen', 'konsulen.id = residen.id_konsulen', 'left');
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function count_all() {
        return $this->db->count_all($this->table_name);
    }

    function insert($data) {
        return $this->db->insert($this->table_name, $data);
    }

    function edit($id, $data) {
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id) {
        return $this->db->delete($this->table_name, array($this->primary_key => $id));
    }
}
