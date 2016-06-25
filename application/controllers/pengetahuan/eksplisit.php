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

	public function detail()
	{
		$this->data['detail_eksplisit'] = $this->eksplisit_model->get_data($this->uri->segment(4));
		$this->load->model('komentar_model/komentar_eksplisit_model');
		$this->data['komentar_eksplisit'] = $this->komentar_eksplisit_model->get_data_descend($this->uri->segment(4));
		$this->load->model('pengguna_model');
		$this->load->view('slate/detail_eksplisit', $this->data);
	}

	function daftar()
	{
		$this->data['list_eksplisit'] = $this->eksplisit_model->get_all_inner_join();		

		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/eksplisit/daftar', $this->data);
		//$this->load->view('footer');

		$this->load->view('slate/daftar_eksplisit', $this->data);
	}

	function daftar_pengetahuan()
	{
		$this->data['list_eksplisit'] = $this->eksplisit_model->get_all_list();
		$this->load->view('slate/daftar_peksplisit', $this->data);
	}

	function lihat($id = NULL)
	{
		$this->data['eksplisit'] = $this->eksplisit_model->get_data($id);
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pengetahuan/eksplisit/lihat', $this->data);
		$this->load->view('footer');
	}

	public function _editor($path,$width) {
		//Loading Library For Ckeditor
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		//configure base path of ckeditor folder 
		$this->ckeditor->basePath = base_url().'assets/slate/js/ckeditor/';
		$this->ckeditor->config['toolbar'] = 'Full';
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor->config['width'] = $width;
		//configure ckfinder with ckeditor config 
		$this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
	}

	function tambah()
	{
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/eksplisit/tambah', $this->data);
		//$this->load->view('footer');
		$path = '../js/ckfinder';
		$width = '400px';
		$this->_editor($path, $width);		
		$this->load->view('slate/tambah_eksplisit', $this->data);	
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
		
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('pengetahuan/eksplisit/ubah', $this->data);
		//$this->load->view('footer');
		$path = '../js/ckfinder';
		$width = '400px';
		$this->_editor($path, $width);
		$this->load->view('slate/ubah_eksplisit', $this->data);
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
