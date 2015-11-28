<?php
class Password_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function update_password_konsulen($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('konsulen', $data);
	}

    function update_password_residen($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('residen', $data);
	}

	function update_password_admin($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('administrator', $data);
	}
}
