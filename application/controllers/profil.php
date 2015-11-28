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

		$this->load->model('konsulen_model');
		$this->load->model('residen_model');
		$this->load->model('admin_model');

		$this->data['judulhalaman'] = "Profil";

		$this->id = $this->session->userdata('id');
	}

	public function index()
	{
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		
		if ($this->session->userdata('tipeuser') == 'konsulen')
		{
			$this->data['konsulen'] = $this->konsulen_model->get_data($this->id);

			$this->load->view('profil/profil_konsulen', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$this->data['residen'] = $this->residen_model->get_data($this->id);

			$this->load->view('profil/profil_residen', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'administrator')
		{		
			$this->data['admin'] = $this->admin_model->get_data($this->id);

			$this->load->view('profil/profil_admin', $this->data);
		}

		$this->load->view('footer');
	}

	public function edit()
	{
		if ($this->session->userdata('tipeuser') == 'konsulen')
		{
			$data['username_konsulen'] = $this->input->post('username_konsulen');
			$data['nama_konsulen']     = $this->input->post('nama_konsulen');
			$data['inisial_konsulen']  = $this->input->post('inisial_konsulen');
			$data['email']             = $this->input->post('email');
			$data['no_hp']             = $this->input->post('no_hp');

			$result = $this->konsulen_model->edit($this->id, $data);
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$data['username']        = $this->input->post('username');
			$data['nik']             = $this->input->post('nik');
			$data['nama_residen']    = $this->input->post('nama_residen');
			$data['inisial_residen'] = $this->input->post('inisial_residen');
			$data['email']           = $this->input->post('email');
			$data['no_gsm']          = $this->input->post('no_gsm');
			$data['no_cdma']         = $this->input->post('no_cdma');
			$data['pin_bb']          = $this->input->post('pin_bb');
			$data['gol_darah']       = $this->input->post('gol_darah');

			$result = $this->residen_model->edit($this->id, $data);
		}
		elseif ($this->session->userdata('tipeuser') == 'administrator')
		{		
			$data['nama_admin']    = $this->input->post('nama_admin');
			$data['inisial_admin'] = $this->input->post('inisial_admin');
			$data['email']         = $this->input->post('email');
			$data['no_hp']         = $this->input->post('no_hp');

			$result = $this->admin_model->edit($this->id, $data);
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
			if ($this->session->userdata('tipeuser') == 'konsulen')
			{
				$data['foto_konsulen'] = $this->upload->data()['file_name'];

				$result = $this->konsulen_model->edit($this->id, $data);
			}
			elseif ($this->session->userdata('tipeuser') == 'residen')
			{
				$data['foto_residen'] = $this->upload->data()['file_name'];

				$result = $this->residen_model->edit($this->id, $data);
			}
			elseif ($this->session->userdata('tipeuser') == 'administrator')
			{		
				$data['foto_admin'] = $this->upload->data()['file_name'];

				$result = $this->admin_model->edit($this->id, $data);
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
