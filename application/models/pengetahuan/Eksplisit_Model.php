<?php
class Eksplisit_Model extends CI_Model 
{
	private $primary_key = 'id_eksplisit';
	private $table_name = 'pengetahuan_eksplisit';
	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{		    
        return $this->db->insert($this->table_name, $data);    
	}

    function count_eksplisit_byId($id)
    {
        $query = $this->db->query("SELECT COUNT(id_pengguna) AS totalEksplisit FROM pengetahuan_eksplisit WHERE id_pengguna='{$id}'");
        return $query->row()->totalEksplisit;
    }

	function count_all() 
	{
        return $this->db->count_all($this->table_name);
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
        $query = $this->db->query("SELECT * FROM pengetahuan_eksplisit ORDER BY id_eksplisit DESC LIMIT 0, 1");
        return $query->row();
    }

    function get_all() 
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_all_inner_join()
    {
        $query = $this->db->query("SELECT * FROM `pengetahuan_eksplisit` inner join pengguna on pengetahuan_eksplisit.id_pengguna = pengguna.id_pengguna WHERE pengetahuan_eksplisit.id_pengguna=".$this->session->userdata('id'));
        return $query->result();
    }

    function get_all_descend()
    {
        $query = $this->db->query("SELECT * FROM pengetahuan_eksplisit ORDER BY id_eksplisit DESC");
        return $query->result();
    }

    function get_rank()
    {
        $query = $this->db->query("SELECT *, COUNT(pengetahuan_eksplisit.id_pengguna) AS jumlah_pengetahuan FROM pengetahuan_eksplisit JOIN pengguna ON pengetahuan_eksplisit.id_pengguna=pengguna.id_pengguna GROUP BY pengetahuan_eksplisit.id_pengguna ORDER BY jumlah_pengetahuan DESC LIMIT 10");
        return $query->result();
    }
}