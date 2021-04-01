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
            'title'         => "Keuangan"
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

    public function prosesedit($id_keuangan)
    {
        $where = array('id_keuangan' => $id_keuangan);
        $data['data_keuangan'] = $this->M_keuangan->edit_data($where, 'data_keuangan')->result();
        $this->load->view('templating/dashboardadmin/Template_dashboardadmin2');
        $this->load->view('keuangan/V_editkeuangan', $data);
        $this->load->view('templating/dashboardadmin/template_footer');
    }

    function update()
    {
        $id_keuangan = $this->input->post('id_keuangan');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $jenis_keuangan = $this->input->post('jenis_keuangan');
        $nominal = $this->input->post('nominal');
        $tipe = $this->input->post('tipe');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'jenis_keuangan' => $jenis_keuangan,
            'nominal' => $nominal,
            'tipe' => $tipe,

        );

        $where = array(
            'id_keuangan' => $id_keuangan
        );

        $this->M_keuangan->update_data($where, $data, 'keuangan');
        redirect('Keuangan');
    }
}
