<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Eksplisit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}		
		
		$this->data['judulhalaman'] = "Eksplisit";
		$this->load->model('pengetahuan/eksplisit_model');

	}

	public function index()
	{
		$this->daftar();
	}

	function daftar()
	{
		$this->data['list_eksplisit'] = $this->eksplisit_model->get_all();		

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/daftar', $this->data);
		$this->load->view('footer');
	}

	function lihat($id = NULL)
	{
		$this->data['eksplisit'] = $this->eksplisit_model->get_data($id);
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/lihat', $this->data);
		$this->load->view('footer');
	}

	function tambah()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/tambah', $this->data);
		$this->load->view('footer');		
	}

	function insert()
	{		
		var_dump($this->input->post('judul'));
		$data['id_pengguna'] 	= $this->session->userdata('id');
		$data['tipeuser'] 		= $this->session->userdata('tipeuser');
		$data['judul'] 			= $this->input->post('judul');
		$data['deskripsi'] 		= $this->input->post('deskripsi');
		$data['file'] 		= $this->upload_sop($data['solusi'] );
		$data['tanggal_input'] 	= date("Y-m-d");
		

		$result = $this->eksplisit_model->insert($data);
		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('pengetahuan/eksplisit/tambah');		
	}

	function upload_sop()
	{			
		$config = array(			
			'upload_path'   => "./eksplisit/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",			
			'max_size'      => "2000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

		$this->load->library('upload', $config);
		if($this->upload->do_upload("sop"));
		{
			$namafile = $this->upload->data()['file_name'];			
			return $namafile;
		}
	}

	function ubah($id=NULL)
	{
		$this->data['eksplisit'] = $this->eksplisit_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/ubah', $this->data);
		$this->load->view('footer');
	}

	function edit($id=NULL)
	{
		$data['id_pengguna'] 	= $this->session->userdata('id');
		$data['tipeuser'] 		= $this->session->userdata('tipeuser');
		$data['judul'] 			= $this->input->post('judul');
		$data['deskripsi'] 		= $this->input->post('deskripsi');
		$data['solusi'] 		= $this->upload_sop($data['solusi'] );
		$data['tanggal_input'] 	= date("Y-m-d");;

		$result = $this->eksplisit_model->edit($id,$data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengetahuan/eksplisit/ubah/'.$id);

	}

	function hapus($id = NULL)
	{
		$this->data['eksplisit'] = $this->eksplisit_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/hapus', $this->data);
		$this->load->view('footer');
	}

	function delete($id = NULL)
	{
		$result = $this->eksplisit_model->delete($id);
		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengetahuan/eksplisit');	

	}


}
