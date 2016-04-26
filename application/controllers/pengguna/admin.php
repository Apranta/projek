<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}
		else
		{
			if ($this->session->userdata('tipeuser') != "administrator")
			{
				$this->session->sess_destroy();
				redirect('login');
			}
		}

		$this->load->library('form_validation');

		$this->load->model('admin_model');

		$this->data['judulhalaman'] = 'Administrator';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_admin'] = $this->admin_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['admin'] = $this->admin_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_admin'] = $this->admin_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[administrator.username]');
		$this->form_validation->set_message('is_unique', "Username yang dimasukkan sudah terdaftar.<br>Username harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('admin/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['username']      = $this->input->post('username');
			$data['password']      = md5($this->input->post('password'));
			$data['nama']    = $this->input->post('nama_admin');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['email']         = $this->input->post('email');
			$data['no_hp']         = $this->input->post('no_hp');
			

			$result = $this->admin_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/admin/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['admin'] = $this->admin_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['nama']    			= $this->input->post('nama_admin');
		$data['Username'] 			= $this->input->post('username');
		$data['tempat_lahir'] 		= $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] 		= $this->input->post('tanggal_lahir');		
		$data['email']            	= $this->input->post('email');
		$data['no_hp']            	= $this->input->post('no_hp');

		$result = $this->admin_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/admin/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->admin_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/admin/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['admin'] = $this->admin_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('admin/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->admin_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/admin');
	}
}
