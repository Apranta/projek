<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model');
		$this->load->model('konsulen_model');
		$this->load->model('residen_model');
		$this->load->model('admin_model');
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

	public function admin()
	{
		if ( ! $this->session->userdata('login'))
		{
			$this->load->view('login/login_admin');
		}
		else
		{
			if ($this->session->userdata('tipeuser') != "administrator")
			{
				$this->session->sess_destroy();
				redirect('login/admin');
			}
			else
			{
				redirect('dashboard');
			}
		}
	}

	public function authentication()
	{
		$tipeuser = $this->input->post('tipeuser');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($tipeuser === 'konsulen')
		{
			$cek = $this->login_model->cek_login_konsulen($username, md5($password));
		}
		elseif ($tipeuser === 'residen')
		{
			$cek = $this->login_model->cek_login_residen($username, md5($password));
		}
		else
		{
			var_dump($username);
			var_dump($password);
			$cek = $this->login_model->cek_login_admin($username, md5($password));
		}

		if ($cek != null )
		{
			if ($tipeuser === 'konsulen') {
            	$nama = $this->konsulen_model->get_konsulen_name($username);
            	$foto = $this->konsulen_model->get_konsulen_foto($username);
            	$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $cek->id,
            		'username' => $username,
            		'nama' => $nama,
            		'tipeuser' => 'konsulen',
            		'foto' => $foto));
            }
		    elseif ($tipeuser === 'residen') {
            	$nama = $this->residen_model->get_residen_name($username);
            	$foto = $this->residen_model->get_residen_foto($username);
            	$tingkat = $this->residen_model->get_residen_tingkat($username);
            	$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $cek->id,
            		'username' => $username,
            		'nama' => $nama, 
            		'tipeuser' => 'residen',
            		'foto' => $foto,
            		'tingkat' => $tingkat));
            }		
            else {
            	$nama = $this->admin_model->get_admin_name($username);
            	$foto = $this->admin_model->get_admin_foto($username);
            	$this->session->set_userdata(array(
            		'login' => true,
            		'id' => $cek->id,
            		'username' => $username,
            		'nama' => $nama,
            		'tipeuser' => 'administrator',
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
