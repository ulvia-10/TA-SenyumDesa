<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	
    function __construct() {
		parent::__construct();
       // load model
       $this->load->model('M_dataakun');
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
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_tambah_dataakun"
		);
		$this->load->view('templating/template_backend', $data);
    
	}
}

    

