<?php
class Admin_model extends CI_Model {

    private $primary_key = 'id';
    private $table_name = 'administrator';

	function __construct() {
        parent::__construct();
    }

    function insert_administrator_table($username, $email_simpan, $no_hp_simpan) {
        $query = $this -> db -> query("INSERT INTO administrator (`username`,`email`,`no_hp`) VALUES ('{$username}','{$email_simpan}','{$no_hp_simpan}')");
        return $query;
    }

    function count_admin() {
        $this -> db -> from('administrator');
        return $this -> db -> count_all_results();
    }

    function get_admin_id($username) {
        $query = $this -> db -> query("SELECT id FROM administrator WHERE username = '{$username}'");
        return $query->row()->id;
    }    

    function get_admin_name($id) {
        $query = $this -> db -> query("SELECT nama FROM administrator WHERE id = '{$id}'");
        return $query->row()->nama;
    }
    
    function get_admin_foto($username) {
        $query = $this -> db -> query("SELECT foto FROM administrator WHERE username = '{$username}'");
        return $query->row()->foto;
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
