<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

    public function index()
    {
        $data = array(

            'namafolder'    => "dashboard",
            'namafileview'  => "V_dashboard",
            'title'         => "Dashboard Admin"
        );
        $this->load->view('templating/header_dashboardadmin', $data);
        $this->load->view('templating/sidebar_dashboardadmin', $data);
        $this->load->view('templating/footer_dashboardadmin', $data);
    }
}