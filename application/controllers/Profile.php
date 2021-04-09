<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_akun extends CI_Controller
{


	function __construct()
	{
		parent::__construct();

		// load model
		$this->load->model('M_dataakun');
		$this->load->model('M_master');
		$this->load->library('form_validation');


		// pengecekan sesi 
		if (empty($this->session->userdata('sess_fullname'))) {

			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
			redirect('login');
		}
	}


	public function index()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_dataakun",
			'title'         => "Data Akun | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$data['profile'] = $this->M_dataakun->get_dataakun();
		$this->load->view('templating/template_dashboardadmin', $data);
	}

	public function dana()
	{
		$data = array(

			'namafolder'	=> "profile",
			'namafileview'	=> "V_rekapdana",
			'title'         => "Profile | Senyum Desa"
		);
		$data['profile'] = $this->M_dataakun->get_allakun();
		$this->load->view('templating/template_dashboardadmin', $data);
	}
	public function edit($id)
	{

		$dataMasterCabang = $this->M_master->getallwilayah();
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_edit_dataakun",
			'title'         => "Edit Account | Senyum Desa",

			// // variable
			'data_master'	=> $dataMasterCabang
		);

		$this->form_validation->set_rules('full_name', 'full_name', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		// $this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password', 'password', 'required');
		// $this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('asal', 'asal', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');
		// $this->form_validation->set_rules('address','address','required');


		if ($this->form_validation->run() == FALSE) {
			#code...    
			$data['profile'] = $this->M_dataakun->getProfileByID($id);
			$this->load->view('templating/template_dashboardadmin', $data);
		} else {
			// #code...
			$this->M_dataakun->editdata($upload);
			$upload = $this->M_dataakun->upload();
			if ($upload['result'] == 'success') {
				$this->M_dataakun->editdata($upload);
				redirect('akun_profile', 'refresh');
			} else {
				echo $upload['error'];
			}
		}
	}

	public function detail($id)
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_detail_dataakun",
			'title'         => "Detail Akun | Senyum Desa"
		);
		$data['profile'] = $this->M_dataakun->getProfileByID($id);
		$this->load->view('templating/template_dashboardadmin', $data);
	}
	public function delete($id)
	{
		$this->M_dataakun->hapusdataakun($id);
		$this->session->set_flashdata('flash-data', 'Account berhasil Dihapus');
		redirect('data_akun', 'refresh');
	}

	//tampilan tambah
	public function tambah()
	{
		$dataMasterCabang = $this->M_master->getallwilayah();
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_tambah_dataakun",
			'title'			=> "Data Akun | Senyum Desa",

			// // variable
			'data_master'	=> $dataMasterCabang
		);

		$this->load->view('templating/template_dashboardadmin', $data);
	}

	// proses tambah
	public function prosesTambah()
	{
		//membuat konfigurasi
		$config = [
			'upload_path' => './assets/images/',
			'allowed_types' => 'gif|jpg|png',
			'max_size' => 1000, 'max_width' => 50,
			'max_height' => 50
		];
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()) //jika gagal upload
		{
			$error = array('error' => $this->upload->display_errors()); //tampilkan error
			$this->load->view('dataakun/V_dataakun', $error); // view tampilan erro di view data akun
		} else
		//jika berhasil upload
		{
			$file = $this->upload->data();
			//mengambil data variabel di form akun_profile
			$data = [
				'photo' => $file['file_name'],
				'id_cabang' => set_value('name_cabang'),
				'full_name' => set_value('full_name'),
				'username' => set_value('username'),
				'password' => set_value('password'),
				'tempat_lahir' => set_value('tempat_lahir'),
				'tanggal_lahir' => set_value('tanggal_lahir'),
				'asal' => set_value('asal'),
				'gender' => set_value('gender'),
				'level' => set_value('level'),
				'status_account' => set_value('status_account'),
			];
			$this->M_dataakun->processInsertAkun($data); //memasukan data ke database


			$elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Akun berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
			$this->session->set_flashdata('msg', $elementHTML); // menampilkan Flash Data

			redirect('Data_akun'); //mengalihkan halaman
		}
	}
	// end controller
}
