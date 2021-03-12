<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	
    function __construct() {

        parent::__construct();

        // pengecekan sesi 
        if ( empty( $this->session->userdata('sess_fullname') ) ) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }


    // load view for master_cabang
	public function index()
	{
		$data = array(

			'namafolder'	=> "master",
			'namafileview'	=> "V_master_cabang"
		);
		$this->load->view('templating/template_backend', $data);
    
	}
}
