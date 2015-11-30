<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Residen extends CI_Controller {
	
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
		$this->load->model('residen_model');

		$this->data['judulhalaman'] = 'Residen';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_residen'] = $this->residen_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('residen/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['residen'] = $this->residen_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('residen/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('residen/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[residen.username]');
		$this->form_validation->set_message('is_unique', "Username yang dimasukkan sudah terdaftar.<br>Username harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('residen/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['username']        = $this->input->post('username');
			$data['password']        = md5($this->input->post('password'));
			$data['nim']             = $this->input->post('nim');
			$data['nama_residen']    = $this->input->post('nama_residen');
			$data['inisial_residen'] = $this->input->post('inisial_residen');
			$data['id_konsulen']     = $this->input->post('id_konsulen');
			$data['email']           = $this->input->post('email');
			$data['no_gsm']          = $this->input->post('no_gsm');
			$data['no_cdma']         = $this->input->post('no_cdma');
			$data['pin_bb']          = $this->input->post('pin_bb');
			$data['gol_darah']       = $this->input->post('gol_darah');
			$data['status']          = $this->input->post('status');
			$data['semester']        = $this->input->post('semester');
			$data['tingkat']         = $this->input->post('tingkat');
			$data['tgl_masuk']       = date("Y-m-d", strtotime($this->input->post('tgl_masuk')));

			$result = $this->residen_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/residen/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['residen'] = $this->residen_model->get_data($id);
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('residen/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['nim']             = $this->input->post('nim');
		$data['nama_residen']    = $this->input->post('nama_residen');
		$data['inisial_residen'] = $this->input->post('inisial_residen');
		$data['id_konsulen']     = $this->input->post('id_konsulen');
		$data['email']           = $this->input->post('email');
		$data['no_gsm']          = $this->input->post('no_gsm');
		$data['no_cdma']         = $this->input->post('no_cdma');
		$data['pin_bb']          = $this->input->post('pin_bb');
		$data['gol_darah']       = $this->input->post('gol_darah');
		$data['status']          = $this->input->post('status');
		$data['semester']        = $this->input->post('semester');
		$data['tingkat']         = $this->input->post('tingkat');
		$data['tgl_masuk']       = date("Y-m-d", strtotime($this->input->post('tgl_masuk')));

		$result = $this->residen_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/residen/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->residen_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/residen/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['residen'] = $this->residen_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('residen/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->residen_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/residen');
	}
}