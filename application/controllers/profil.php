<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	private $data = array();
	private $id;

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->model('pengguna_model');				
		$this->data['judulhalaman'] = "Profil";

		$this->id = $this->session->userdata('id');
		$this->load->model('reward_model');
	}

	public function index()
	{
		//$this->load->view('header', $this->data);
		//$this->load->view('sidebar', $this->data);
		
		if ($this->session->userdata('tipeuser') == 'sekretaris')
		{
			$this->data['sekertaris'] = $this->pengguna_model->get_data($this->id);
			$this->load->view('slate/profil_sekretaris', $this->data);
			//$this->load->view('profil/profil_sekertaris', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'pegawai')
		{
			$this->data['pegawai'] = $this->pengguna_model->get_data($this->id);

			$this->load->view('slate/profil', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'administrator')
		{		
			$this->data['admin'] = $this->pengguna_model->get_data($this->id);
			$this->load->view('slate/profil_admin', $this->data);
			//$this->load->view('profil/profil_admin', $this->data);
		}

		//$this->load->view('footer');
	}

	public function edit()
	{
		if ($this->session->userdata('tipeuser') == 'sekertaris')
		{			
			$data['nama']     		= $this->input->post('nama');
			$data['nip']     		= $this->input->post('nip');
			$data['tempat_lahir']   = $this->input->post('tempat_lahir');
			$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
			$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
			$data['divisi']     	= $this->input->post('divisi');
			$data['jabatan']     	= 'sekertaris';
			$data['alamat']     	= $this->input->post('alamat');						
			$data['email']          = $this->input->post('email');
			$data['no_hp']          = $this->input->post('no_hp');
			
			$result = $this->pengguna_model->edit($this->id, $data);
		}
		elseif ($this->session->userdata('tipeuser') == 'pegawai')
		{			
			$data['nama']     		= $this->input->post('nama');
			$data['nip']     		= $this->input->post('nip');
			$data['tempat_lahir']   = $this->input->post('tempat_lahir');
			$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
			$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
			$data['divisi']     	= $this->input->post('divisi');
			$data['jabatan']     	= 'pegawai';
			$data['alamat']     	= $this->input->post('alamat');						
			$data['email']          = $this->input->post('email');
			$data['no_hp']          = $this->input->post('no_hp');

			$result = $this->pengguna_model->edit($this->id, $data);
		}
		elseif ($this->session->userdata('tipeuser') == 'administrator')
		{		
			$data['nama']     		= $this->input->post('nama');
			$data['nip']     		= $this->input->post('nip');
			$data['tempat_lahir']   = $this->input->post('tempat_lahir');
			$data['tanggal_lahir']  = date("Y-m-d", strtotime($this->input->post('tanggal_lahir')));
			$data['jenis_kelamin']  = $this->input->post('jenis_kelamin');
			$data['divisi']     	= $this->input->post('divisi');
			$data['jabatan']     	= 'administrator';
			$data['alamat']     	= $this->input->post('alamat');						
			$data['email']          = $this->input->post('email');
			$data['no_hp']          = $this->input->post('no_hp');
			
			$result = $this->pengguna_model->edit($this->id, $data);
		}

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('profil');
	}

	public function edit_foto()
	{
		$config = array(
			'file_name'     => $this->id . "_" . time(),
			'upload_path'   => "./foto/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite'     => TRUE,
			'max_size'      => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);

		$this->load->library('upload', $config);

		if($this->upload->do_upload("foto"))
		{
			if ($this->session->userdata('tipeuser') == 'pegawai')
			{
				$data['foto'] = $this->upload->data()['file_name'];

				$result = $this->pengguna_model->edit($this->id, $data);
			}
			elseif ($this->session->userdata('tipeuser') == 'sekertaris')
			{
				$data['foto'] = $this->upload->data()['file_name'];

				$result = $this->pengguna_model->edit($this->id, $data);
			}
			elseif ($this->session->userdata('tipeuser') == 'administrator')
			{		
				$data['foto'] = $this->upload->data()['file_name'];

				$result = $this->pengguna_model->edit($this->id, $data);
			}

			$this->session->set_userdata(array(
    			'foto' => $this->upload->data()['file_name']
    		));
		}

		if ($result) $this->session->set_flashdata('berhasil_foto', 'Ubah foto berhasil.');
		else $this->session->set_flashdata('gagal_foto', 'Ubah foto gagal.');

		redirect('profil');
	}
}
