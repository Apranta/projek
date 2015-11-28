<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->data['judulhalaman'] = 'Dashboard';
	}

	public function index()
	{		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('dashboard/dashboard_residen', $this->data);
		$this->load->view('footer');
	}
}
