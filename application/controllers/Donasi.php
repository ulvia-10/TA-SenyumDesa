<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        $this->load->model('M_donasi');
        $this->load->library('form_validation');

        // pengecekan sesi 
        if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }


    // Tampilan Donasi Tabel
    public function index()
    {
        $data = array(

            'namafolder'    => "Donasi",
            'namafileview'  => "V_tabeldonasi",
            'title'         => "Donasi | Senyum Desa"
        );

        $data['data_donasi'] = $this->M_donasi->getDonasi();
        if ($this->input->post('keyword')) {
            #code...
            $data['data_donasi'] = $this->M_donasi->cariData();
        }

        $this->load->view('templating/Template_dashboardadmin', $data);
    }

    //Tampilan Tambah Donasi
    public function tambah()
    {
        $data = array(

            'namafolder'    => "Donasi",
            'namafileview'    => "V_tambahdonasi",
            'title'         => "Donasi | Senyum Desa "
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }
    //Tampilan detail
    public function detail()
    {
        $data['donasi'] = $this->M_donasi->getDetailDonasi();
        $data = array(

            'namafolder'    => "Donasi",
            'namafileview'  => "V_detaildonasi",
            'title'         => "Donasi Senyum Desa"
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }


    // proses sistem mastercabang

    // proses tambah
    function prosesTambah()
    {

        $this->M_donasi->processInsertDonasi();
    }

    // proses hapus
    function hapus($Id_donasi)
    {

        $this->M_donasi->processDeleteDonasi($Id_donasi);
    }

    public function prosesedit($Id_donasi)
    {
        $where = array('Id_donasi' => $Id_donasi);
        $data['data_donasi'] = $this->M_donasi->edit_data($where, 'data_donasi')->result();
        $this->load->view('templating/dashboardadmin/Template_dashboardadmin2');
        $this->load->view('Donasi/V_editdonasi', $data);
        $this->load->view('templating/dashboardadmin/template_footer');
    }

    function update()
    {
        $Id_donasi = $this->input->post('Id_donasi');
        $nama_donatur = $this->input->post('nama_donatur');
        $status = $this->input->post('status');
        $jml_donasi = $this->input->post('jml_donasi');

        $data = array(
            'nama_donatur' => $nama_donatur,
            'status'       => $status,
            'jml_donasi'   => $jml_donasi,

        );

        $where = array(
            'Id_donasi' => $Id_donasi
        );

        // flashdata
        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Donasi berhasil diupdate pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        $this->M_donasi->update_data($where, $data, 'data_donasi');
        redirect('Donasi');
    }
}
