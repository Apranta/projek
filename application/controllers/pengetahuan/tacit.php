<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Tacit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}		

		$this->load->helper('url');
		$this->load->model('pengetahuan/tacit_model');
		$this->data['judulhalaman'] = "Tacit";
		$this->load->model('reward_model');
	}

	public function index()
	{
		$this->daftar();
	}

	public function detail()
	{
		$this->data['detail_tacit'] = $this->tacit_model->get_data($this->uri->segment(4));
		$this->load->model('komentar_model/komentar_tacit_model');
		$this->data['komentar_tacit'] = $this->komentar_tacit_model->get_data_descend($this->uri->segment(4));
		$this->load->model('pengguna_model');
		$this->load->view('slate/detail', $this->data);
	}

	function daftar()
	{
		if ($this->session->userdata('tipeuser') == 'administrator' or $this->session->userdata('tipeuser') == 'sekertaris') {
			$this->data['list_tacit'] = $this->tacit_model->get_all_inner_join2();
		} else {
			$this->data['list_tacit'] = $this->tacit_model->get_all_inner_join();
		}
		//var_dump($data['list_tacit']);
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/tacit/daftar', $this->data);
		//$this->load->view('footer');
		
		//$this->data['list_tacit'] = $this->tacit_model->get_all_by_userId();
		$this->load->view('slate/daftar_tacit', $this->data);
	}

	function daftar_pengetahuan()
	{
		$this->data['list_tacit'] = $this->tacit_model->get_all_list();
		$this->load->view('slate/daftar_ptacit', $this->data);
	}

	function lihat($id = NULL)
	{
		$this->data['tacit'] = $this->tacit_model->get_data($id);
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/tacit/lihat', $this->data);
		$this->load->view('footer');
	}

	function tambah()
	{
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/tacit/tambah', $this->data);
		//$this->load->view('footer');	
		$this->load->view('slate/tambah_tacit', $this->data);	
	}

	function insert()
	{		
		$data['id_pengguna'] 	= $this->session->userdata('id');
		$data['tipeuser']   	= $this->session->userdata('tipeuser');
		$data['judul'] 			= $this->input->post('judul');
		$data['masalah'] 		= $this->input->post('masalah');
		$data['solusi'] 		= $this->input->post('solusi');
		$data['tanggal_input'] 	= date("Y-m-d");

		$result = $this->tacit_model->insert($data);
		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('pengetahuan/tacit/tambah');		
	}

	function ubah($id=NULL)
	{
		$this->data['tacit'] = $this->tacit_model->get_data($id);
		
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/tacit/ubah', $this->data);
		//$this->load->view('footer');
		$this->load->view('slate/ubah_tacit', $this->data);
	}

	function edit($id=NULL)
	{
		$data['id_pengguna'] 	= $this->session->userdata('id');
		$data['tipeuser']   	= $this->session->userdata('tipeuser');
		$data['judul'] 			= $this->input->post('judul');
		$data['masalah'] 		= $this->input->post('masalah');
		$data['solusi'] 		= $this->input->post('solusi');
		$data['tanggal_input'] 	= date("Y-m-d");

		$result = $this->tacit_model->edit($id,$data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengetahuan/tacit/ubah/'.$id);

	}

	function hapus($id = NULL)
	{
		//$this->data['tacit'] = $this->tacit_model->get_data($id);
		
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/tacit/hapus', $this->data);
		//$this->load->view('footer');
		$this->data['tacit'] = $this->tacit_model->get_data($this->uri->segment(4));
		$this->load->view('slate/hapus_tacit', $this->data);
	}

	function delete($id = NULL)
	{
		$result = $this->tacit_model->delete($id);
		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengetahuan/tacit');	

	}


}