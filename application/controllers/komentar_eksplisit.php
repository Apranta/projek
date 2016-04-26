<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komentar_eksplisit extends CI_Controller {

	public $id_eksplisit;	
	private $data = array();
	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('login'))
		{
			$this->session->set_flashdata('login', 'Silahkan login terlebih dahulu.');
            redirect('login');
		}		

		$this->load->model('komentar_model/komentar_eksplisit_model');
		$this->load->model('pengguna_model');
		$this->load->model('admin_model');


	}

	function index()
	{
		$this-->tambah_komentar();
	}

	function tambah_komentar()
	{				 
        $this->data['id_eksplisit'] = $this->input->post('id');
		$this->data['id_pengguna'] = $this->session->userdata('id');
		$this->data['tipeuser'] = $this->session->userdata('tipeuser');
		$this->data['isi_komentar'] = $this->input->post('komentar');
		$this->data['tgl_komentar'] = date("Y-m-d");

		$this->komentar_eksplisit_model->insert($this->data);		    
	}

	
	
	function lihat()
	{
		

		$result = $this->komentar_eksplisit_model->get_komentraById($this->input->post('id'));					
		if($result)
		{
			echo "
			<div class=box>
            <div class=box-header>
              <h3 class=box-title>Komentar</h3>
            </div>
            <!-- /.box-header -->
            <div class=box-body no-padding>


			<table class = table table-striped>
                	<thead>
                  	<tr>
                    	<th width= 10px>Nama</th>
                    	<th>Komentar</th>
                    	<th width = 100px align =right>tanggal</th>                    
                  		</tr>
                	</thead>
              		";

              		echo "<tbody>";      

					foreach ($result as $komentar)
					{
						if ($komentar->tipeuser != "administrator")
						{
							$name = $this->pengguna_model->get_pengguna_name_by_id($komentar->id_pengguna);																										
						}
						else
						{
							$name = $this->admin_model->get_admin_name($komentar->id_pengguna);
							$name = "Admin -".$name;
						}
						echo"
							<tr>
							<td>".$name."</td>
							<td>".$komentar->isi_komentar."</td>
							<td align =right>".$komentar->tgl_komentar."</td>
						";
						
					}
					echo "</tbody>";

					echo "<tfoot>
                  	<tr>
                    	<th>Nama</th>
                    	<th>Komentar</th>
                    	<th>Tanggal</th>                    	
                  	</tr>
                	</tfoot>
                	</table>
                	</div>
                	</div>
                	</div>                	
                	";

					
					
		}						
	}	
}

