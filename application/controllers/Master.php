<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        // pengecekan sesi 
        if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }


    // load view for master_cabang
    public function index()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'  => "V_master_cabang",
            'title'         => "Maaster Cabang"
        );
		 $data['master_cabang'] = $this->Master->getallwilayah();
        if ($this->input->post('keyword')) {
            #code...
            $data['master_cabang'] = $this->Master->cariData();
        }
		
        $this->load->view('templating/datatabels_header', $data);
        $this->load->view('templating/datatabels_sidebar', $data);
        $this->load->view('templating/datatabels_footer', $data);
    }

    // load view for master_cabang
    public function edit()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'    => "V_editmaster_cabang",
            'title'         => "Maaster Cabang"
        );
        $this->load->view('templating/datatabels_header', $data);
        $this->load->view('templating/datatabels_sidebar', $data);
        $this->load->view('templating/datatabels_footer', $data);
    }
    public function tambah()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'    => "V_tambahmaster_cabang",
            'title'         => "Maaster Cabang"
        );
        $this->load->view('templating/datatabels_header', $data);
        $this->load->view('templating/datatabels_sidebar', $data);
        $this->load->view('templating/datatabels_footer', $data);
    }
    public function detail()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'  => "V_detailmaster_cabang",
            'title'         => "Master Cabang"
        );
        $this->load->view('templating/datatabels_header', $data);
        $this->load->view('templating/datatabels_sidebar', $data);
        $this->load->view('templating/datatabels_footer', $data);
    }
}
