<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	
    function __construct() {
		parent::__construct();
       
		// load model
       	$this->load->model('M_dataakun');
       	$this->load->model('Master');

    }
    

	public function index()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_dataakun"
		);
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
}

    

