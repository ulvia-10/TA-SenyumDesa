<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        	// load model
		$this->load->model('M_kegiatan');
		$this->load->library('form_validation');

}
public function index()
	{
		$data = array(

			'namafolder'	=> "rekruitment",
			'namafileview'	=> "V_rekruitment",
			'title'         => "Home | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggota', $data);
       
	}

}
?>
