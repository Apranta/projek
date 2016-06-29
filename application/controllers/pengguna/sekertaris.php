<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sekertaris extends CI_Controller {
	
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
			/*if ($this->session->userdata('tipeuser') != "administrator")
			{
				$this->session->sess_destroy();
				redirect('login');
			}*/
		}

		$this->load->library('form_validation');

		$this->load->model('pengguna_model');

		$this->data['judulhalaman'] = 'Sekertaris';		
	}

	public function index()
	{
		$this->daftar();
	}

	public function daftar()
	{
		$this->data['list_sekertaris'] = $this->pengguna_model->get_sekertaris('sekertaris');		
		//$this->data['list_sekertaris'] = $this->pengguna_model->get_all();				
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('sekertaris/daftar', $this->data);
		$this->load->view('footer');
	}

	public function lihat($id = NULL)
	{
		$this->data['sekertaris'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('sekertaris/lihat', $this->data);
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->data['list_sekertaris'] = $this->pengguna_model->get_all();

		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('sekertaris/tambah', $this->data);
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
			$this->load->view('sekertaris/tambah', $this->data);
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
			$data['tipeuser']     	= 'sekertaris';

			$result = $this->pengguna_model->insert($data);

			if ($result) $this->session->set_flashdata('berhasil', 'Tambah data berhasil.');
			else $this->session->set_flashdata('gagal', 'Tambah data gagal.');

			redirect('pengguna/sekertaris/tambah');
		}
	}

	public function ubah($id = NULL)
	{
		$this->data['sekertaris'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('sekertaris/ubah', $this->data);
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
		$data['tipeuser']     	= 'sekertaris';

		$result = $this->pengguna_model->edit($id, $data);
		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('pengguna/sekertaris/ubah/' . $id);
	}

	public function edit_password($id = NULL)
	{
		$data['password'] = md5($this->input->post('password'));

		$result = $this->pengguna_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil_password', 'Ubah password berhasil.');
		else $this->session->set_flashdata('gagal_password', 'Ubah password gagal.');

		redirect('pengguna/sekertaris/ubah/' . $id);
	}

	public function hapus($id = NULL)
	{
		$this->data['sekertaris'] = $this->pengguna_model->get_data($id);
		
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $this->data);
		$this->load->view('sekertaris/hapus', $this->data);
		$this->load->view('footer');
	}

	public function delete($id = NULL)
	{
		$result = $this->pengguna_model->delete($id);

		if ($result) $this->session->set_flashdata('berhasil', 'Hapus data berhasil.');
		else $this->session->set_flashdata('gagal', 'Hapus data gagal.');

		redirect('pengguna/sekertaris');
	}

	public function _editor($path,$width) {
		//Loading Library For Ckeditor
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		//configure base path of ckeditor folder 
		$this->ckeditor->basePath = base_url().'assets/slate/js/ckeditor/';
		$this->ckeditor->config['toolbar'] = 'Full';
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor->config['width'] = $width;
		//configure ckfinder with ckeditor config 
		$this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
	}

	public function email() {
		if ($this->input->post('send')) {
			$this->load->library('my_phpmailer');
			$mail = new PHPMailer();
	        $mail->IsSMTP(); // we are going to use SMTP
	        $mail->SMTPAuth   = true; // enabled SMTP authentication
	        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
	        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
	        $mail->Port       = 465;                   // SMTP port to connect to GMail
	        $mail->Username   = "myemail@gmail.com";  // user email address
	        $mail->Password   = "";            // password in GMail
	        $mail->SetFrom($mail->Username, $this->session->userdata('nama'));  //Who is sending the email
	        $mail->AddReplyTo($this->input->post('to'), $this->input->post('to'));  //email address that receives the response
	        $mail->Subject    = $this->input->post('subject');
	        $mail->Body      = $this->input->post('message');
	        $mail->AltBody    = "Plain text message";
	        $destino = $this->input->post('to'); // Who is addressed the email to
	        $mail->AddAddress($destino, $destino);

	        //$mail->AddAttachment("images/phpmailer.gif");      // some attached files
	        //$mail->AddAttachment("images/phpmailer_mini.gif"); // as many as you want
	        if(!$mail->Send()) {
	            $data["message"] = "Error: " . $mail->ErrorInfo;
	        } else {
	            $data["message"] = "<div class='alert alert-success'>Message sent correctly!</div>";
	        }

	        $this->session->set_flashdata('msg', $data['message']);
	        redirect('pengguna/sekertaris/email');
			exit;
		}

		$path = '../js/ckfinder';
		$width = '1150px';
		$this->_editor($path, $width);
		$this->load->view('slate/email_form');
	}
}
