<?php
class Reward_model extends CI_Model {

    private $primary_key = 'id_reward';
    private $table_name = 'reward';

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
        return $query->row();
    }

    function count_reward($id)
    {
        $query = $this->db->query("SELECT COUNT(id_pengguna) AS totalReward FROM reward WHERE id_pengguna='{$id}'");
        return $query->row()->totalReward;
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
