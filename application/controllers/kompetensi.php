<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kompetensi extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->data['judulhalaman'] = 'Kompetensi';
	}

	public function index()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('kompetensi/daftar', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('kompetensi/tambah', $this->data);
		$this->load->view('footer');
	}
}
