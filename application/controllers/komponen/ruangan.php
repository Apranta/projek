<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ruangan extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->model('ruangan_model');

		$this->data['judulhalaman'] = 'Ruangan';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_ruangan'] = $this->ruangan_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('ruangan/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['ruangan'] = $this->ruangan_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('ruangan/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('ruangan/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$data['nama_ruang']    = $this->input->post('nama_ruang');
		$data['inisial_ruang'] = $this->input->post('inisial_ruang');

		$result = $this->ruangan_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('komponen/ruangan/tambah');
	}

	public function ubah($id = NULL)
	{
		$this->data['ruangan'] = $this->ruangan_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('ruangan/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['nama_ruang']    = $this->input->post('nama_ruang');
		$data['inisial_ruang'] = $this->input->post('inisial_ruang');

		$result = $this->ruangan_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('komponen/ruangan/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['ruangan'] = $this->ruangan_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('ruangan/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->ruangan_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('komponen/ruangan');
	}
}
