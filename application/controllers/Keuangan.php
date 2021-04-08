<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        $this->load->model('M_keuangan');
        $this->load->model('M_master');

        $this->load->library('form_validation');

        // pengecekan sesi 
        if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }


    // Tampilan keuangan  Tabel
    public function index()
    {
        $data = array(

            'namafolder'    => "keuangan",
            'namafileview'  => "V_tabelKeuangan",
            'title'         => "Kas | Senyum Desa"
        );

        $data['data_keuangan'] = $this->M_keuangan->getallkeuangan();
        if ($this->input->post('keyword')) {
            #code...
            $data['data_keuangan'] = $this->M_keuangan->cariData();
        }

        $this->load->view('templating/Template_dashboardadmin', $data);
    }

    //Tampilan Tambah 
    public function tambah()
    {

        $getDataCabang = $this->M_master->getallwilayah();

        $data = array(

            'namafolder'    => "keuangan",
            'namafileview'    => "V_tambahkeuangan",
            'title'         => "data keuangan",

            // variable
            'dataCabang'    => $getDataCabang
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }
    //Tampilan detail
    public function detail()
    {
        $data = array(

            'namafolder'    => "keuangan",
            'namafileview'  => "V_detailkeuangan",
            'title'         => "keuangan"
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }


    // proses sistem keuangan
    // proses tambah
    function prosesTambah()
    {

        $this->M_keuangan->processInsertKeuangan();
    }

    // proses hapus
    function hapus($id_keuangan)
    {

        $this->M_keuangan->processDeleteKeuangan($id_keuangan);
    }

    public function edit()
    {
    }
}
