<?php
class Pengguna_model extends CI_Model {

    private $primary_key = 'id';
    private $table_name = 'pengguna';

	function __construct() {
        parent::__construct();
    }

    function insert_pengguna_table($username, $password,$nama, $nip, $tempat_lahir,$tanggal_lahir,$jenis_kelamin, $divisi, $jabatan, $alamat, $email, $no_hp, $foto) {
        $query = $this -> db -> query("INSERT INTO pengguna ('username', 'password','nama', 'nip', 'tempat_lahir','tanggal_lahir','jenis_kelamin', 'divisi', 'jabatan', 'alamat', 'email', 'no_hp', 'foto') VALUES ('{$username}','{$email_simpan}','{$no_hp_simpan}')");
        return $query;
    }

    function count_pengguna() {
        $this -> db -> from('pengguna');
        return $this -> db -> count_all_results();
    }

    function get_pengguna_id($username) {
        $query = $this -> db -> query("SELECT id FROM pengguna WHERE username = '{$username}'");
        return $query->row()->id;
    }

    function get_jabatan($username) {
        $query = $this -> db -> query("SELECT jabatan FROM pengguna WHERE username = '{$username}'");
        return $query->row()->jabatan;
    }
    

    function get_pengguna_name($username) {
        $query = $this -> db -> query("SELECT nama FROM pengguna WHERE username = '{$username}'");
        return $query->row()->nama;
    }
   
    function get_pengguna_name_by_id($id) {
        $query = $this -> db -> query("SELECT nama FROM pengguna WHERE id = '{$id}'");
        return $query->row()->nama;
    }

    function get_pengguna_foto($username) {
        $query = $this -> db -> query("SELECT foto FROM pengguna WHERE username = '{$username}'");
        return $query->row()->foto;   
    }

    function get_pengguna_foto_by_id($id) {
        $query = $this -> db -> query("SELECT foto FROM pengguna WHERE id = '{$id}'");
        return $query->row()->foto;   
    }

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_sekertaris($jabatan)
    {        
        $query = $this -> db -> query("SELECT * FROM pengguna WHERE tipeuser = '{$jabatan}'");     
        return $query->result();
    }

    function get_pegawai($jabatan)
    {        
        $query = $this -> db -> query("SELECT * FROM pengguna WHERE tipeuser = '{$jabatan}'");     
        return $query->result();
    }

    function get_tipeuser($username)
    {
        $query = $this->db-> query("SELECT tipeuser FROM pengguna WHERE username = '{$username}'");
        return $query->row()->tipeuser;
    }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
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
