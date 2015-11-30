<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->model('operator_model');

		$this->data['judulhalaman'] = 'Operator';
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_operator'] = $this->operator_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('operator/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['operator'] = $this->operator_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('operator/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('operator/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$data['nama_operator']    = $this->input->post('nama_operator');
		$data['inisial_operator'] = $this->input->post('inisial_operator');

		$result = $this->operator_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('komponen/operator/tambah');
	}

	public function ubah($id = NULL)
	{
		$this->data['operator'] = $this->operator_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('operator/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['nama_operator']    = $this->input->post('nama_operator');
		$data['inisial_operator'] = $this->input->post('inisial_operator');

		$result = $this->operator_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('komponen/operator/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['operator'] = $this->operator_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('operator/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->operator_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('komponen/operator');
	}
}
