<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {
	
	public function __construct() {
		 parent::__construct();
	}
	
	public function list_field($tabel) {
		return $this->db->list_fields($tabel);
	} 
	
	public function list_data_fields($tabel) {
		return $this->db->field_data($tabel);
	}
	
	public function add($tabel, $data) {
		return $this->db->insert($tabel, $data);
	}
	
	public function update($id, $field_id, $tabel, $data) {
		$this->db->where($field_id, $id);
		return $this->db->update($tabel, $data);
	}
	
	public function delete($id, $field_id, $tabel) {
		$this->db->where($field_id, $id);
		return $this->db->delete($tabel);
	}
	
	public function get_all($start,$perpage,$id,$tabel) {
		$this->db->limit($perpage,$start);
		$this->db->order_by($id,'desc');
		return $this->db->get($tabel);
	}
	
	public function get_autocomplete($id,$tabel) {
		$this->db->select($id);
		$this->db->order_by($id,'asc');
		return $this->db->get($tabel);
	}
	
	public function count_result($table) {
		return $this->db->count_all_results($table);
	}
	
	public function searching($key,$field_1, $tabel, $limit=0, $offset=0) {
		$this->db->like($field_1,$key);
		$list_header = $this->list_field($tabel);
		foreach($list_header as $row_field)
		{
			$this->db->or_like($row_field,$key);			
		}
		if($limit==0 && $offset==0) {
			$count = $this->db->get($tabel);
			return $count->num_rows();
		}else{
			return $this->db->get($tabel,$limit,$offset);
		}
	}
	
	public function detail($id,$field,$table) {
		$this->db->where($field,$id);
		$query = $this->db->get($table);
		if($query->num_rows() > 0)
		{
			return $query;
		}
	}

	public function get_where($table,$array_field) {
		$query = $this->db->get_where($table,$array_field);		
		return $query;
	}
}
