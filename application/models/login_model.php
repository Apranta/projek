<?php
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function cek_login_konsulen($username, $password)
	{
		$query = $this->db->query("SELECT id FROM konsulen WHERE username_konsulen = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

	function cek_login_residen($username, $password)
	{
		$query = $this->db->query("SELECT id FROM residen WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

	function cek_login_admin($username, $password)
	{
		$query = $this->db->query("SELECT id FROM administrator WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

}
