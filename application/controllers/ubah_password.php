<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ubah_password extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->load->model('password_model');

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->data['judulhalaman'] = 'Ubah Password';
		$this->load->model('reward_model');
	}

	public function index()
	{		
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		//$this->load->view('ubah_password');
		//$this->load->view('footer');
		$this->load->view('slate/ubah_password');
	}

	public function update()
	{
		$data['password_baru']            = $this->input->post('password_baru');
		$data['konfirmasi_password_baru'] = $this->input->post('konfirmasi_password_baru');

		if($data['password_baru'] != $data['konfirmasi_password_baru'])
		{
			$this->session->set_flashdata('gagal', 'Konfirmasi password salah.');
			redirect("ubah_password");
		}
		else
		{
			$id = $this->session->userdata('id');
			$temp['password'] = md5($data['password_baru']);

			if($this->session->userdata('tipeuser') == 'pegawai')
			{
				$result = $this->password_model->update_password_pegawai($id, $temp);
			}
			elseif($this->session->userdata('tipeuser') == 'sekertaris')
			{
				$result = $this->password_model->update_password_sekertaris($id, $temp);
			}
			elseif($this->session->userdata('tipeuser') == 'administrator')
			{
				$result = $this->password_model->update_password_admin($id, $temp);
			}

			if($result != null)
			{
				$this->session->sess_destroy();

				$this->session->set_flashdata('login', 'Ubah password berhasil. Harap login ulang dengan password baru.');
				redirect("login");
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Ubah password salah.');
				redirect("ubah_password");
			}
		}
	}
}
