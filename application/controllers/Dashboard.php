<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('M_rekruitment');

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
            'title'         => "Dashboard | Senyum Desa"
        );
        $data['profile']= $this->M_rekruitment->getDataProfile();
        $this->load->view('templating/template_dashboardadmin', $data);
    }
    public function indexkorwil()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_korwil",
            'title'         => "Dashboard Korwil| Senyum Desa"
        );
        $this->load->view('templating/template_korwil', $data);
    }
}