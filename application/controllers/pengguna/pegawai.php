<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
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
			//if ($this->session->userdata('tipeuser') != "administrator")
			//{
			//	$this->session->sess_destroy();
			//	redirect('login');
			//}
		}

		$this->load->library('form_validation');
		$this->load->model('reward_model');
		$this->load->model('pengguna_model');
		$this->data['judulhalaman'] = 'Pegawai';		
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_pegawai'] = $this->pengguna_model->get_pegawai('pegawai');		
		//$this->data['list_pegawai'] = $this->pengguna_model->get_all();				
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pegawai/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['pegawai'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pegawai/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_pegawai'] = $this->pengguna_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pegawai/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[pengguna.username]');
		$this->form_validation->set_message('is_unique', "Username yang dimasukkan sudah terdaftar.<br>Username harus unik dan tidak boleh sama.");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $this->data);
			$this->load->view('konsulen/tambah', $this->data);
			$this->load->view('footer');
		}
		else
		{
			$data['username'] 		= $this->input->post('username');
			$data['password'] 		= md5($this->input->post('password'));
			$data['nama']     		= $this->input->post('nama');
			$data['nip']     		= $this->input->post('nip');
			$data['tempat_lahir']   = $this->input->post('tempat_lahir');
			$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
			$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
			$data['divisi']     	= $this->input->post('divisi');
			$data['jabatan']     	= $this->input->post('jabatan');
			$data['alamat']     	= $this->input->post('alamat');						
			$data['email']          = $this->input->post('email');
			$data['no_hp']          = $this->input->post('no_hp');
			$data['tipeuser']     	= 'pegawai';

			$result = $this->pengguna_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/pegawai/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['pegawai'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pegawai/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{		
		$data['nama']     		= $this->input->post('nama');
		$data['nip']     		= $this->input->post('nip');
		$data['tempat_lahir']   = $this->input->post('tempat_lahir');
		$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
		$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
		$data['divisi']     	= $this->input->post('divisi');
		$data['jabatan']     	= $this->input->post('jabatan');
		$data['alamat']     	= $this->input->post('alamat');						
		$data['email']          = $this->input->post('email');
		$data['no_hp']          = $this->input->post('no_hp');
		$data['tipeuser']     	= 'pegawai';

		$result = $this->pengguna_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/pegawai/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->pengguna_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/pegawai/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['pegawai'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('pegawai/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->pengguna_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/pegawai');
	}

	public function view_reward() {
		$id_reward = $this->uri->segment(4);
		if (!isset($id_reward)) {
			redirect('pengguna/pegawai');
			exit;
		}

		$this->data['reward'] = $this->reward_model->get_data($id_reward);
		$this->data['pegawai'] = $this->pengguna_model->get_data($this->data['reward']->id_pengguna);

		$this->load->view('slate/view_reward', $this->data);
	}

	public function download() {
		$id_reward = $this->uri->segment(4);
		if (!isset($id_reward)) {
			redirect('pengguna/pegawai');
			exit;
		}

		$this->data['reward'] = $this->reward_model->get_data($id_reward);
		$this->data['pegawai'] = $this->pengguna_model->get_data($this->data['reward']->id_pengguna);

		//load the view and saved it into $html variable
        $html = $this->load->view('slate/download', $this->data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "sertifikat.pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
	}
}
