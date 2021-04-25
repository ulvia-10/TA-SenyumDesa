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
		$data ['profile'] = $this->M_dataakun->get_dataakun();
		$this->load->view('templating/template_dashboardadmin', $data);
       
	}
	public function profile(){
		$data = array(

			'namafolder'	=> "profile",
			'namafileview'	=> "V_profile",
			'title'         => "Profile | Senyum Desa"
		);
		$data ['profile'] = $this->M_dataakun->get_allakun();
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
		
		$this->form_validation->set_rules('full_name','full_name','required');
		$this->form_validation->set_rules('username','username','required');
		// $this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		// $this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('asal','asal','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('level','level','required');
		// $this->form_validation->set_rules('address','address','required');
		
		
		if ($this->form_validation->run() == FALSE){
			#code...    
			$data['profile']= $this->M_dataakun->getProfileByID($id);        
			$this->load->view('templating/template_dashboardadmin', $data);
		}
		else{
			// #code...
			$this->M_dataakun->editdata($upload);
			$upload = $this->M_dataakun->upload();
			if($upload ['result'] == 'success'){
				$this->M_dataakun->editdata($upload);
				redirect('akun_profile','refresh');
			}else{
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
		$data['profile']= $this->M_dataakun->getProfileByID($id);
		$this->load->view('templating/template_dashboardadmin', $data);
	
	}
	
	public function delete($id)
	{
		$this->M_dataakun->hapusdataakun($id);
		$this->session->set_flashdata('flash-data','Account berhasil Dihapus');
		redirect('data_akun','refresh');
    
	}

	public function tambah()
	{

		$dataMasterCabang = $this->M_master->getallwilayah();
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_tambah_dataakun",
			'title'			=> "Add Account | Senyum Desa",

			// // variable
			'data_master'	=> $dataMasterCabang
		);
	
		$this->load->view('templating/template_dashboardadmin', $data);
	
	}

	// proses tambah
	function prosesTambah()
	{

		// print_r( $this->input->post() );
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('full_name','full_name','required');
		$this->form_validation->set_rules('username','username','required');
		// $this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		// $this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('asal','asal','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('level','level','required');
		// $this->form_validation->set_rules('address','address','required');

	
		if ($this->form_validation->run()==FALSE){

			// $this->tambah();
			echo validation_errors();
		}
		else{
			$upload = $this->M_dataakun->upload();
			if($upload ['result'] == 'success'){
				$this->M_dataakun->tambahdataakun($upload);
				$this->session->set_flashdata('flash-data','ditambahkan');
				redirect('akun_profile','refresh');
			}else{
				echo $upload['error'];
			}
		}
	}
}