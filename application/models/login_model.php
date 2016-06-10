<?php
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function cek_login_pengguna($username, $password)
	{
		$query = $this->db->query("SELECT id_pengguna FROM pengguna WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

	function cek_login_admin($username, $password)
	{
		$query = $this->db->query("SELECT id_pengguna FROM administrator WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

}
