<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model');		 		
		$this->load->model('pengguna_model');
	}

	public function index()
	{
		if ( ! $this->session->userdata('login'))
		{
			$this->load->view('login/login_user');
		}
		else
		{
			redirect('dashboard');
		}
	}
	

	public function authentication()
	{
		$pengguna = $this->input->post('pengguna');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if ($pengguna === 'pengguna' )
		{
			$cek = $this->login_model->cek_login_pengguna($username, md5($password));			
		}
		
		else
		{					
			var_dump($username);
			$cek = $this->login_model->cek_login_admin($username, md5($password));
		}

		if ($cek != null )
		{
			if ($pengguna === 'pengguna') {
            	$nama = $this->pengguna_model->get_pengguna_name($username);
            	$foto = $this->pengguna_model->get_pengguna_foto($username);
            	$tipeuser = $this->pengguna_model->get_tipeuser($username);
            	$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $cek->id_pengguna,
            		'username' => $username,
            		'nama' => $nama,            		
            		'tipeuser' => $tipeuser,
            		'foto' => $foto));
            }		              
            redirect('dashboard');
		}
		else
		{ 		
			$this->session->set_flashdata('login', 'Login tidak berhasil.<br>Username atau password salah.');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
