<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	
    function __construct() {
		parent::__construct();
		// load model
       	$this->load->model('M_dataakun');
       	// $this->load->model('M_master');

    }
    

	public function index()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_dataakun"
		);
		//disesuaikan sama dengan nama view$ 
		$data ['profile'] = $this->M_dataakun->get_dataakun();
		$this->load->view('templating/template_backend', $data);
	
    
	}
	public function edit()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_edit_dataakun"
		);
		$this->load->view('templating/template_backend', $data);
    
	}
	public function detail($id)
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_detail_dataakun"
		);
		$data['profile']= $this->M_dataakun->getProfileByID($id);
		$this->load->view('templating/template_backend', $data);
	
    
	}
	public function delete($id)
	{
		$this->M_dataakun->hapusdataakun($id);
		$this->session->set_flashdata('flash-data','dihapus');
		redirect('dataakun/index','refresh');
    
	}
	public function tambah()
	{

		$kondisi = ['status_cabang' => "active"];
		$dataMasterCabang = $this->Master->getDataCabang( $kondisi );
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_tambah_dataakun",

			// variable
			'data_master'	=> $dataMasterCabang
		);
		$this->load->view('templating/template_backend', $data);
    
	}



	// proses tambah
	function prosesTambah() {

		print_r( $this->input->post() );
	}
}

    

