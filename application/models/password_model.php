<?php
class Password_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function update_password_pegawai($id, $data)
	{
		$this->db->where('id_pengguna', $id);
		return $this->db->update('pengguna', $data);
	}

    function update_password_sekertaris($id, $data)
	{
		$this->db->where('id_pengguna', $id);
		return $this->db->update('pengguna', $data);
	}

	function update_password_admin($id, $data)
	{
		$this->db->where('id_pengguna', $id);
		return $this->db->update('pengguna', $data);
	}
}
