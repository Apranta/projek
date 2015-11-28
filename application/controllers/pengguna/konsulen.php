<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konsulen extends CI_Controller {
	
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

		$this->load->model('konsulen_model');

		$this->data['judulhalaman'] = 'Konsulen';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('konsulen/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['konsulen'] = $this->konsulen_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('konsulen/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('konsulen/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username_konsulen', 'Username', 'required|is_unique[konsulen.username_konsulen]');
		$this->form_validation->set_message('is_unique', "Username yang dimasukkan sudah terdaftar.<br>Username harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('konsulen/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['username_konsulen'] = $this->input->post('username_konsulen');
			$data['password']          = md5($this->input->post('password'));
			$data['nama_konsulen']     = $this->input->post('nama_konsulen');
			$data['inisial_konsulen']  = $this->input->post('inisial_konsulen');
			$data['email']             = $this->input->post('email');
			$data['no_hp']             = $this->input->post('no_hp');

			$result = $this->konsulen_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/konsulen/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['konsulen'] = $this->konsulen_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('konsulen/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['nama_konsulen']    = $this->input->post('nama_konsulen');
		$data['inisial_konsulen'] = $this->input->post('inisial_konsulen');
		$data['email']            = $this->input->post('email');
		$data['no_hp']            = $this->input->post('no_hp');

		$result = $this->konsulen_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/konsulen/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->konsulen_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/konsulen/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['konsulen'] = $this->konsulen_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('konsulen/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->konsulen_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/konsulen');
	}
}
