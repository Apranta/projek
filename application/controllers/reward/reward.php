<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Reward extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');	
		}		
		$this->load->library('email');
		$this->load->model('pengguna_model');
		$this->load->model('reward_model');
		$this->load->model('pengetahuan/tacit_model');
		$this->load->model('pengetahuan/eksplisit_model');
		$this->data['judulhalaman'] = "Reward";		

	}

	public function index()
	{
		$this->daftar();
	}

	public function tambah()
	{
		$this->reward['id_pengguna'] 		= $this->input->post('id');
		$this->reward['reward'] 			= $this->input->post('reward');
		$this->reward['deskripsi'] 			= $this->input->post('deskripsi');
		$this->reward['tanggal_reward'] 	= Date("Y-m-d");

		$this->reward_model->insert($this->reward);		

		$pemberi_reward  = $this->pengguna_model->get_data($this->session->userdata('id'));
		$penerima_reward = $this->pengguna_model->get_data($this->input->post('id'));
		

		$this->email->from($pemberi_reward->email, $pemberi_reward->nama);
		$this->email->to($penerima_reward->email);
		
		$this->email->subject('Reward');
		$this->email->message('Selamat anda berhak mendapatkan reward atas partisipasi anda melakukah sharing pengetahuan');

		$this->email->send();

		redirect('reward/reward/daftar');

	}

	public function daftar()
	{
		$pengguna = $this->pengguna_model->get_all();
		if( !empty($pengguna))
		{
			$n = max(array_keys($pengguna));
			for($i=0;$i<=$n;$i++)
			{
				$totalTacit[$i] 		= 0;
				$totalEksplisit[$i] 	= 0;
				$id 					= $pengguna[$i]->id;
				$totalTacit[$i] 		= $this->tacit_model->count_tacit_byId($id);
				$totalEksplisit[$i] 	= $this->eksplisit_model->count_eksplisit_byId($id);
				$totalPengetahuan[$i] 	= $totalTacit[$i]+$totalEksplisit[$i];				
				//echo "n"+$totalPengetahuan[$i];

				$jumlahReward = $this->reward_model->count_reward($id);					

				$totalPengetahuan[$i] = $totalPengetahuan[$i] - (2*$jumlahReward);	
									
			}
		}
		$this->data['pengguna'] = $pengguna;
		$this->data['totalTacit'] = $totalTacit;
		$this->data['totalEksplisit'] = $totalEksplisit;				
		$this->data['total'] = $totalPengetahuan;

		//DaftarReward
		$daftar_reward 	= $this->reward_model->get_all();			
		if(!empty($daftar_reward))
		{
			$jumlahReward 	= max(array_keys($daftar_reward));		
			for ($i=0; $i <=$jumlahReward ; $i++) 
			{ 			
				$foto_pengguna[$i] = $this->pengguna_model->get_pengguna_foto_by_id($daftar_reward[$i]->id_pengguna);	
				$nama_pengguna[$i] = $this->pengguna_model->get_pengguna_name_by_id($daftar_reward[$i]->id_pengguna);	 	
				$this->data['foto_pengguna'] = $foto_pengguna;
				$this->data['nama_pengguna'] = $nama_pengguna;
			}				
		}		
		
		

		$this->data['daftar_reward'] = $daftar_reward;		
		
		$this->load->view('header',$this->data);
		$this->load->view('sidebar',$this->data);
		$this->load->view('reward/daftar',$this->data);
		$this->load->view('footer');
	}
}