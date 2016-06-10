<?php
class Komentar_eksplisit_model extends CI_Model {

    private $primary_key = 'id_komentar_eksplisit';
    private $table_name = 'komentar_eksplisit';

	function __construct() {
        parent::__construct();
    }

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_komentraById($id_eksplisit) {
        $this->db->where('id_eksplisit', $id_eksplisit);
        $query = $this->db->get($this->table_name);
        return $query->result();
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
