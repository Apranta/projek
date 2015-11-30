<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pasien extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->library('form_validation');

		$this->load->model('pasien_model');

		$this->data['judulhalaman'] = 'Pasien';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_pasien'] = $this->pasien_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pasien/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['pasien'] = $this->pasien_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pasien/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pasien/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('no_rm', 'No. Rekam Medis', 'required|is_unique[pasien.no_rm]');
		$this->form_validation->set_message('is_unique', "No. Rekam Medis yang dimasukkan sudah terdaftar.<br>No. Rekam Medis harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('pasien/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['no_rm']         = $this->input->post('no_rm');
			$data['nama_pasien']   = $this->input->post('nama_pasien');
			$data['umur']          = $this->input->post('umur');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');

			$result = $this->pasien_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('komponen/pasien/tambah');
		}
	}

	public function insert_jadwaloperasi()
	{
		$this->form_validation->set_rules('no_rm', 'No. Rekam Medis', 'required|is_unique[pasien.no_rm]');
		$this->form_validation->set_message('is_unique', "No. Rekam Medis yang dimasukkan sudah terdaftar.<br>No. Rekam Medis harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('pasien_gagal', "No. Rekam Medis yang dimasukkan sudah terdaftar.<br>No. Rekam Medis harus unik dan tidak boleh sama.");
			redirect('jadwal/jadwal_operasi/tambah');
		}
		else
		{
			$data['no_rm']         = $this->input->post('no_rm');
			$data['nama_pasien']   = $this->input->post('nama_pasien');
			$data['umur']          = $this->input->post('umur');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');

			$result = $this->pasien_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data pasien berhasil. Sekarang Anda dapat memilihnya pada daftar No. Rekam Medis.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('jadwal/jadwal_operasi/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['pasien'] = $this->pasien_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pasien/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		// $this->form_validation->set_rules('no_rm', 'No. Rekam Medis', 'required|is_unique[pasien.no_rm]');
		// $this->form_validation->set_message('is_unique', "No. Rekam Medis yang dimasukkan sudah terdaftar.<br>No. Rekam Medis harus unik dan tidak boleh sama.");
		
		// if ($this->form_validation->run() == FALSE)
		// {
		// 	$this->load->view('header', $this->data);
		// 	$this->load->view('sidebar', $this->data);
		// 	$this->load->view('pasien/ubah', $this->data);
		// 	$this->load->view('footer');
		// }
		// else
		// {
			$data['no_rm']         = $this->input->post('no_rm');
			$data['nama_pasien']   = $this->input->post('nama_pasien');
			$data['umur']          = $this->input->post('umur');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');

			$result = $this->pasien_model->edit($id, $data);

			if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

			redirect('komponen/pasien/ubah/' . $data['no_rm']);
		// }
	}

	public function hapus($id = NULL)
	{
		$this->data['pasien'] = $this->pasien_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pasien/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->pasien_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('komponen/pasien');
	}
}
