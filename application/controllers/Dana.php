<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dana extends CI_Controller
{
    
	function __construct()
	{
		parent::__construct();

		// load model
		$this->load->model('M_dana');
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

			'namafolder'	=> "Dana",
			'namafileview'	=> "V_rekapdana",
			'title'         => "Rekap Dana | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$data ['dana'] = $this->M_dana->get_alldana();
		$this->load->view('templating/template_dashboardadmin', $data);
       
	}
}

?>