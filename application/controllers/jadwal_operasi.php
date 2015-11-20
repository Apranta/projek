<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_operasi extends CI_Controller {

	private $data       = array();
	private $kompetensi = array();
	
	public function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}

		$this->load->library('form_validation');

		// $this->load->model('jadwaloperasi_model');
		// $this->load->model('ruangan_model');
		// $this->load->model('pasien_model');
		// $this->load->model('konsulen_model');
		// $this->load->model('residen_model');
		// $this->load->model('operator_model');

		$this->data['judulhalaman'] = 'Jadwal Operasi';

		$this->kompetensi[1]  = "Anestesi Bedah Elektif";                                                                                  
		$this->kompetensi[2]  = "Anestesi Bedah Darurat";                                                                                  
		$this->kompetensi[3]  = "Anestesi Umum";                                                                                                    
		$this->kompetensi[4]  = "Anestesi / Analgesia Regional";                                                                    
		$this->kompetensi[5]  = "Teknik Anestesi / Analgesia Subarakhnoid";                                              
		$this->kompetensi[6]  = "Teknik Anestesi / Analgesia Epidural Lumbal / Thorakal";                  
		$this->kompetensi[7]  = "Teknik Anestesi / Analgesia Blok Brakialis";                                          
		$this->kompetensi[8]  = "Teknik Anestesi / Analgesia Kaudal";                                                          
		$this->kompetensi[9]  = "Teknik Anestesi / Analgesia Blok Saraf Tepi Lainnya";                        
		$this->kompetensi[10] = "Teknik Analgesia Intravena (Biers)";                                                        
		$this->kompetensi[11] = "Anestesi Bedah Umum";                                                                                      
		$this->kompetensi[12] = "Digestif";                                                                                                            
		$this->kompetensi[13] = "THT dan Bedah Mulut";                                                                                      
		$this->kompetensi[14] = "Mata";                                                                                                                    
		$this->kompetensi[15] = "Urologi";                                                                                                              
		$this->kompetensi[16] = "Ortopedi";                                                                                                            
		$this->kompetensi[17] = "Plastik";                                                                                                              
		$this->kompetensi[18] = "Onkologi";                                                                                                            
		$this->kompetensi[19] = "Minimal Invasif";                                                                                              
		$this->kompetensi[20] = "Manajemen Nyeri";                                                                                              
		$this->kompetensi[21] = "Anestesi / Analgesia Rawat Jalan";                                                            
		$this->kompetensi[22] = "Anestesi / Analgesia diluar kamar operasi";                                          
		$this->kompetensi[23] = "Bedah Umum Lain-lain";                                                                                    
		$this->kompetensi[24] = "Anestesi dan Analgesia Obstetri";                                                              
		$this->kompetensi[25] = "Pre-eklamsi dan eklamsi";                                                                              
		$this->kompetensi[26] = "Obstetri Lain-lain";                                                                                        
		$this->kompetensi[27] = "Anestesi Bedah Pediatri";                                                                              
		$this->kompetensi[28] = "Neonatus";                                                                                                            
		$this->kompetensi[29] = "Bayi";                                                                                                                    
		$this->kompetensi[30] = "Anak-anak";                                                                                                          
		$this->kompetensi[31] = "Anestesi Bedah Saraf";                                                                                    
		$this->kompetensi[32] = "Trauma Kepala";                                                                                                  
		$this->kompetensi[33] = "Perdarahan intracranial non-trauma";                                                        
		$this->kompetensi[34] = "Tumor intrakranial";                                                                                        
		$this->kompetensi[35] = "Pintasan VP";                                                                                                      
		$this->kompetensi[36] = "Medula spinalis";                                                                                              
		$this->kompetensi[37] = "Anestesi Bedah Thoraks Non Jantung Terbuka dan Jantung Terbuka";
		$this->kompetensi[38] = "Anestesi pada Kondisi Khusus";                                                                    
		$this->kompetensi[39] = "Kelainan jantung pada operasi non jantung";                                          
		$this->kompetensi[40] = "COPD / Asma";                                                                                                      
		$this->kompetensi[41] = "DM";                                                                                                                        
		$this->kompetensi[42] = "Tiroid";                                                                                                                
		$this->kompetensi[43] = "Geriatri";                                                                                                            
		$this->kompetensi[44] = "Obesitas";                                                                                                            
		$this->kompetensi[45] = "Mengelola Pasien ICU (10 variasi kasus)";                                              
		$this->kompetensi[46] = "Melakukan resusitasi di luar kamar bedah dan ICU";                            
		$this->kompetensi[47] = "Memasang kateter intra-arterial dan pungsi intra-arterial";          
		$this->kompetensi[48] = "Memasang kateter vena central";                                                                  
		$this->kompetensi[49] = "Melakukan intubasi sulit";

		$this->data['kompetensi'] = $this->kompetensi;
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{	
		date_default_timezone_set('Asia/Jakarta');
        // $today = date("Y-m-d");

        $hari = date("d");
        $bulan = date("m");
        $tahun = date("Y");

        if(isset($_GET['hari'])) $hari = $_GET['hari'];
        if(isset($_GET['bulan'])) $bulan = $_GET['bulan'];
        if(isset($_GET['tahun'])) $tahun = $_GET['tahun'];

        if($hari == "") {
            if($bulan < 10) $b = "0" . $bulan;
            $today = $tahun . "-" . $b;
            $today = "tanggal LIKE '%" . $today . "%'";
        }
        else {
        	if($bulan < 10) $b = "0" . $bulan;
	        $today = $tahun . "-" . $b . "-" . $hari;
	        $today = "tanggal = '" . $today . "'";
        }

        $tanggalM = array();

        $tanggalM[1] = "Januari";
        $tanggalM[2] = "Februari";
        $tanggalM[3] = "Maret";
        $tanggalM[4] = "April";
        $tanggalM[5] = "Mei";
        $tanggalM[6] = "Juni";
        $tanggalM[7] = "Juli";
        $tanggalM[8] = "Agustus";
        $tanggalM[9] = "September";
        $tanggalM[10] = "Oktober";
        $tanggalM[11] = "November";
        $tanggalM[12] = "Desember";

        $tampilanbulan = "";

        for ($i=1; $i <= 12; $i++) { 
            $tampilanbulan .= "<option value='".$i."'";
            if($i == (int) $bulan) $tampilanbulan .= " selected";
            $tampilanbulan .= ">".$tanggalM[$i];
            $tampilanbulan .= "</option>";
        }

        $tampilantahun = "";

        for ($i=$tahun-5; $i <= $tahun; $i++) { 
            $tampilantahun .= "<option value='".$i."'";
            if($i == (int) $tahun) $tampilantahun .= " selected";
            $tampilantahun .= ">".$i;
            $tampilantahun .= "</option>";
        }

        $this->data['hari'] = $hari;
        $this->data['bulan'] = $tampilanbulan;
        $this->data['tahun'] = $tampilantahun;

		// $this->data['list_jadwaloperasi'] = $this->jadwaloperasi_model->get_all_today($today);

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('jadwaloperasi/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['jadwaloperasi'] = $this->jadwaloperasi_model->get_data($id);

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('jadwaloperasi/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_pasien']   = $this->pasien_model->get_all();
		$this->data['list_ruangan']  = $this->ruangan_model->get_all();
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		$this->data['list_residen']  = $this->residen_model->get_all();
		$this->data['list_operator'] = $this->operator_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('jadwaloperasi/tambah', $this->data);
		$this->load->view('footer');
	}

	public function insert()
	{
		$data['tanggal']             = date("Y-m-d", strtotime($this->input->post('tanggal')));
		$data['ronde']               = $this->input->post('ronde');
		$data['id_ruang']            = $this->input->post('id_ruang');
		$data['no_rm']               = $this->input->post('no_rm');
		$data['diagnosis']           = $this->input->post('diagnosis');
		$data['asa']                 = $this->input->post('asa');
		$data['rencana_operasi']     = $this->input->post('rencana_operasi');
		$data['id_residen']          = $this->input->post('id_residen');
		$data['id_operator']         = $this->input->post('id_operator');
		$data['id_operator2']        = $this->input->post('id_operator2');
		$data['id_operator3']        = $this->input->post('id_operator3');
		$data['teknik_anestesi']     = $this->input->post('teknik_anestesi');
		
		$temp                        = $this->input->post('kompetensi_anestesi');
		$hasil                       = "";
		foreach ($temp as $pilihan){
			$hasil                   .= $pilihan . ",";
		}
		$data['kompetensi_anestesi'] = $hasil;

		$data['id_konsulen']         = $this->input->post('id_konsulen');
		$data['id_residen1']         = $this->input->post('id_residen1');
		$data['id_residen2']         = $this->input->post('id_residen2');
		$data['id_residen3']         = $this->input->post('id_residen3');
		$data['id_residen4']         = $this->input->post('id_residen4');
		$data['id_residen5']         = $this->input->post('id_residen5');
		$data['dpjb']                = $this->input->post('dpjb');
		$data['notes']               = $this->input->post('notes');

		$result = $this->jadwaloperasi_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('jadwal/jadwal_operasi/tambah');
	}

	public function ubah($id = NULL)
	{
		$this->data['jadwaloperasi']  = $this->jadwaloperasi_model->get_data($id);
		$this->data['list_pasien']   = $this->pasien_model->get_all();
		$this->data['list_ruangan']  = $this->ruangan_model->get_all();
		$this->data['list_konsulen'] = $this->konsulen_model->get_all();
		$this->data['list_residen']  = $this->residen_model->get_all();
		$this->data['list_operator'] = $this->operator_model->get_all();

		$list_kompetensi = $this->kompetensi;

		$this->data['list_kompetensi'] =  $list_kompetensi;
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('jadwaloperasi/ubah', $this->data);
		$this->load->view('footer');
	}

	public function edit($id = NULL)
	{
		$data['tanggal']             = date("Y-m-d", strtotime($this->input->post('tanggal')));
		$data['ronde']               = $this->input->post('ronde');
		$data['id_ruang']            = $this->input->post('id_ruang');
		$data['no_rm']               = $this->input->post('no_rm');
		$data['diagnosis']           = $this->input->post('diagnosis');
		$data['asa']                 = $this->input->post('asa');
		$data['rencana_operasi']     = $this->input->post('rencana_operasi');
		$data['id_residen']          = $this->input->post('id_residen');
		$data['id_operator']         = $this->input->post('id_operator');
		$data['id_operator2']        = $this->input->post('id_operator2');
		$data['id_operator3']        = $this->input->post('id_operator3');
		$data['teknik_anestesi']     = $this->input->post('teknik_anestesi');
		
		$temp                        = $this->input->post('kompetensi_anestesi');
		$hasil                       = "";
		foreach ($temp as $pilihan){
			$hasil                   .= $pilihan . ",";
		}
		$data['kompetensi_anestesi'] = $hasil;

		$data['id_konsulen']         = $this->input->post('id_konsulen');
		$data['id_residen1']         = $this->input->post('id_residen1');
		$data['id_residen2']         = $this->input->post('id_residen2');
		$data['id_residen3']         = $this->input->post('id_residen3');
		$data['id_residen4']         = $this->input->post('id_residen4');
		$data['id_residen5']         = $this->input->post('id_residen5');
		$data['dpjb']                = $this->input->post('dpjb');
		$data['notes']               = $this->input->post('notes');

		$result = $this->jadwaloperasi_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

		redirect('jadwal/jadwal_operasi/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['jadwaloperasi'] = $this->jadwaloperasi_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('jadwaloperasi/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->jadwaloperasi_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('jadwal/jadwal_operasi');
	}
}
