<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pasien_bangsal extends CI_Controller {
	
	private $data = array();

	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->library('email');

		$this->load->model('pasien_bangsal_model');
		$this->load->model('konsulen_model');
		$this->load->model('residen_model');
		$this->data['judulhalaman'] = 'Pasien Bangsal';
		
	}

	public function daftar()
	{
		if ($this->session->userdata('tipeuser') == 'administrator')
		{
			$this->data['list_bukuharian'] = $this->pasien_bangsal_model->get_all();
		}	
		elseif ($this->session->userdata('tipeuser') == 'konsulen')
		{
			$this->data['list_bukuharian'] = $this->pasien_bangsal_model->get_all_for_konsulen($this->session->userdata('id'));
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$this->data['list_bukuharian'] = $this->pasien_bangsal_model->get_all_for_residen($this->session->userdata('id'));
		}

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('catatan/pasien_bangsal/daftar', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);

		if ($this->session->userdata('tipeuser') == 'administrator')
		{
			$this->data['list_residen'] = $this->residen_model->get_all();
			
			$this->load->view('pasien_bangsal/tambah_admin', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'konsulen')
		{
			redirect('pasien_bangsal/daftar');
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$this->load->view('catatan/pasien_bangsal/tambah_residen', $this->data);
		}
		$this->load->view('footer');
	}
				


	public function insert()
	{
		if ($this->session->userdata('tipeuser') == 'administrator')
		{
			$data['tgl_mulai']        = date("Y-m-d", strtotime($this->input->post('tgl_mulai')));
			$data['tgl_selesai']      = date("Y-m-d", strtotime($this->input->post('tgl_selesai')));
			$data['jam_mulai']        = $this->input->post('jam_mulai');
			$data['jam_siap']         = $this->input->post('jam_siap');
			$data['id_residen']       = $this->input->post('id_residen');
			$data['modul']            = $this->input->post('modul');
			$data['catatan_residen']  = $this->input->post('catatan_residen');
			$data['id_konsulen']      = $this->input->post('id_konsulen');
			$data['catatan_konsulen'] = $this->input->post('catatan_konsulen');
			$data['paraf_konsulen']   = $this->input->post('paraf_konsulen');
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$data['tgl_mulai']       = date("Y-m-d", strtotime($this->input->post('tgl_mulai')));
			$data['tgl_selesai']     = date("Y-m-d", strtotime($this->input->post('tgl_selesai')));
			$data['jam_mulai']       = $this->input->post('jam_mulai');
			$data['jam_siap']        = $this->input->post('jam_siap');
			$data['id_residen']      = $this->session->userdata('id');
			$data['modul']           = $this->input->post('modul');
			$data['catatan_residen'] = $this->input->post('catatan_residen');
			$data['id_konsulen']     = $this->input->post('id_konsulen');
		}

		$result = $this->pasien_bangsal_model->insert($data);

		if ($result) 
		{
			if ($this->session->userdata('tipeuser') == 'residen')
			{
				$konsulen = $this->konsulen_model->get_data($data['id_konsulen']);
				$residen  = $this->residen_model->get_data($data['id_residen']);

				$this->email->initialize();

				$this->email->from('anestesifkunsri@gmail.com', system_name);
				$this->email->to($konsulen->email);

				$this->email->subject($residen->nama_residen . ' Telah Mengisi Buku Harian');
				$this->email->message(
					$residen->nama_residen . " telah mengisi buku harian. Silahkan Anda cek di : <a href='" . base_url('index.php/catatanharian/buku_harian') . "'>" . base_url('index.php/catatanharian/buku_harian') . "</a>. Terima kasih."
					);

				$this->email->send();
			}
			$this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		}
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('pasien_bangsal/tambah');
	}


	public function ubah($id = NULL)
	{
		$this->data['bukuharian']    = $this->bukuharian_model->get_data($id);
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		$this->data['list_kegiatan'] = array("Morning Report", "Tugas OK Elektif", "Visite Preoperatif", "Diskusi Preoperatif", "Tugas Jaga", "Belajar Mandiri", "ICU/HCU", "Perkuliahan", "Emergency Resusitasi", "Poliklinik", "Pelayanan Nyeri", "Pelayanan Sedasi");

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);

		if ($this->session->userdata('tipeuser') == 'administrator')
		{
			$this->data['list_residen'] = $this->residen_model->get_all();
			
			$this->load->view('bukuharian/ubah_admin', $this->data);
		}
		elseif ($this->session->userdata('tipeuser') == 'konsulen')
		{
			if ($this->bukuharian_model->get_paraf($id) == '0')
			{
				$this->load->view('bukuharian/ubah_konsulen', $this->data);
			}
			else
			{
				redirect('catatanharian/buku_harian/lihat/' . $id);
			}
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			if ($this->bukuharian_model->get_paraf($id) == '0')
			{
				$this->load->view('bukuharian/ubah_residen', $this->data);
			}
			else
			{
				redirect('catatanharian/buku_harian/lihat/' . $id);
			}
		}
		
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		if ($this->session->userdata('tipeuser') != 'administrator')
		{
			if ($this->bukuharian_model->get_paraf($id) == '1')
			{
				redirect('catatanharian/buku_harian/lihat/' . $id);
			}
		}

		if ($this->session->userdata('tipeuser') == 'administrator')
		{
			$data['tgl_mulai']       = date("Y-m-d", strtotime($this->input->post('tgl_mulai')));
			$data['tgl_selesai']     = date("Y-m-d", strtotime($this->input->post('tgl_selesai')));
			$data['jam_mulai']       = $this->input->post('jam_mulai');
			$data['jam_siap']        = $this->input->post('jam_siap');
			$data['id_residen']      = $this->input->post('id_residen');
			$data['modul']           = $this->input->post('modul');
			$data['catatan_residen'] = $this->input->post('catatan_residen');
			$data['id_konsulen']     = $this->input->post('id_konsulen');
			$data['catatan_konsulen'] = $this->input->post('catatan_konsulen');
			$data['paraf_konsulen']   = $this->input->post('paraf_konsulen');
		}
		elseif ($this->session->userdata('tipeuser') == 'konsulen')
		{
			$data['catatan_konsulen'] = $this->input->post('catatan_konsulen');
			$data['paraf_konsulen']   = $this->input->post('paraf_konsulen');
		}
		elseif ($this->session->userdata('tipeuser') == 'residen')
		{
			$data['tgl_mulai']       = date("Y-m-d", strtotime($this->input->post('tgl_mulai')));
			$data['tgl_selesai']     = date("Y-m-d", strtotime($this->input->post('tgl_selesai')));
			$data['jam_mulai']       = $this->input->post('jam_mulai');
			$data['jam_siap']        = $this->input->post('jam_siap');
			$data['id_konsulen']     = $this->input->post('id_konsulen');
			$data['modul']           = $this->input->post('modul');
			$data['catatan_residen'] = $this->input->post('catatan_residen');
		}

		$result = $this->bukuharian_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('catatanharian/buku_harian/ubah/' . $id);
	}

	public function lihat($id = NULL)
	{
		$this->data['bukuharian'] = $this->pasien_bangsal_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('catatan/pasien_bangsal/lihat', $this->data);
		$this->load->view('footer');
	}





}
