<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blank extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data['judulhalaman'] = 'Blank Page';
	}

	public function index()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('blank', $this->data);
		$this->load->view('footer');
	}
}
