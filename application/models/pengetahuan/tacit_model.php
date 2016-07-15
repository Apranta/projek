<?php
class Tacit_model extends CI_Model 
{
	private $primary_key = 'id_tacit';
	private $table_name = 'pengetahuan_tacit';

	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{		    
        return $this->db->insert($this->table_name, $data);    
	}

	function count_all() 
	{
        return $this->db->count_all($this->table_name);
    }

    function count_tacit_byId($id)
    {
        $query = $this->db->query("SELECT COUNT(id_pengguna) AS totalTacit FROM pengetahuan_tacit WHERE id_pengguna='{$id}'");
        return $query->row()->totalTacit;
    }

    function edit($id, $data) 
    {
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id) 
    {
        return $this->db->delete($this->table_name, array($this->primary_key => $id));
    }

    function get_data($id) 
    {
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_last()
    {
        $query = $this->db->query("SELECT * FROM pengetahuan_tacit ORDER BY id_tacit DESC LIMIT 0, 1");
        return $query->row();
    }

    function get_all_inner_join()
    {
        $query = $this->db->query("SELECT * FROM `pengetahuan_tacit` inner join pengguna on pengetahuan_tacit.id_pengguna = pengguna.id_pengguna WHERE pengetahuan_tacit.id_pengguna=".$this->session->userdata('id'));
        return $query->result();
    }

    function get_all_inner_join2()
    {
        $query = $this->db->query("SELECT * FROM `pengetahuan_tacit` inner join pengguna on pengetahuan_tacit.id_pengguna = pengguna.id_pengguna");
        return $query->result();
    }

    function get_all_list()
    {
        $query = $this->db->query("SELECT * FROM `pengetahuan_tacit` inner join pengguna on pengetahuan_tacit.id_pengguna = pengguna.id_pengguna");
        return $query->result();
    }

    function get_all() 
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_all_descend()
    {
        $query = $this->db->query("SELECT * FROM pengetahuan_tacit ORDER BY id_tacit DESC");
        return $query->result();
    }

    function get_ten_descend()
    {
        $query = $this->db->query("SELECT * FROM pengetahuan_tacit ORDER BY id_tacit DESC LIMIT 10");
        return $query->result();
    }

    function get_rank()
    {
        $query = $this->db->query("SELECT *, COUNT(pengetahuan_tacit.id_pengguna) AS jumlah_pengetahuan FROM pengetahuan_tacit JOIN pengguna ON pengetahuan_tacit.id_pengguna=pengguna.id_pengguna GROUP BY pengetahuan_tacit.id_pengguna ORDER BY jumlah_pengetahuan DESC LIMIT 10");
        return $query->result();
    }

    function get_all_by_userId()
    {
        $this->db->where('id_pengguna', $this->session->userdata('id'));
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
}