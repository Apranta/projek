<?php
class Konsulen_model extends CI_Model {

    private $primary_key = 'id';
    private $table_name = 'konsulen';

	function __construct() {
        parent::__construct();
    }

    function insert_konsulen_table($username, $email_simpan, $no_hp_simpan) {
        $query = $this -> db -> query("INSERT INTO konsulen (`username_konsulen`,`email`,`no_hp`) VALUES ('{$username}','{$email_simpan}','{$no_hp_simpan}')");
        return $query;
    }

    function count_konsulen() {
        $this -> db -> from('konsulen');
        return $this -> db -> count_all_results();
    }

    function get_konsulen_id($username) {
        $query = $this -> db -> query("SELECT id FROM konsulen WHERE username_konsulen = '{$username}'");
        return $query->row()->id;
    }

    function get_konsulen_name($username) {
        $query = $this -> db -> query("SELECT nama_konsulen FROM konsulen WHERE username_konsulen = '{$username}'");
        return $query->row()->nama_konsulen;
    }

    function get_konsulen_name_by_id($id) {
        $query = $this -> db -> query("SELECT nama_konsulen FROM konsulen WHERE id = '{$id}'");
        return $query->row()->nama_konsulen;
    }

    function get_konsulen_foto($username) {
        $query = $this -> db -> query("SELECT foto_konsulen FROM konsulen WHERE username_konsulen = '{$username}'");
        return $query->row()->foto_konsulen;   
    }

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
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
