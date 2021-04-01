<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        $this->load->model('M_master');
        $this->load->library('form_validation');

        // pengecekan sesi 
        if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }


    // Tampilan Master Cabang Tabel
    public function index()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'  => "V_master_cabang",
            'title'         => "Master Cabang"
        );

        $data['master_cabang'] = $this->M_master->getallwilayah();
        if ($this->input->post('keyword')) {
            #code...
            $data['master_cabang'] = $this->M_master->cariData();
        }

        $this->load->view('templating/Template_dashboardadmin', $data);
    }

    //Tampilan Tambah Master Cabang
    public function tambah()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'    => "V_tambahmaster_cabang",
            'title'         => "Master Cabang"
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }
    //Tampilan detail
    public function detail()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'  => "V_detailmaster_cabang",
            'title'         => "Master Cabang"
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }


    // proses sistem mastercabang
    // proses tambah
    function prosesTambah()
    {

        $this->M_master->processInsertCabang();
    }

    // proses hapus
    function hapus($id_cabang)
    {

        $this->M_master->processDeleteCabang($id_cabang);
    }

    public function prosesedit($masterid)
    {
        $data['title'] = 'Edit Senyum Desa';
        $where = array('id_cabang' => $masterid);
        $data['master_cabang'] = $this->M_master->edit_data($where, 'master_cabang')->result();
        $this->load->view('templating/dashboardadmin/Template_dashboardadmin2');
        $this->load->view('master/V_editmaster_cabang', $data);
        $this->load->view('templating/dashboardadmin/template_footer');
    }

    function update()
    {
        $id_cabang = $this->input->post('id_cabang');
        $name_cabang = $this->input->post('name_cabang');
        $status_cabang = $this->input->post('status_cabang');

        $data = array(
            'name_cabang' => $name_cabang,
            'status_cabang' => $status_cabang

        );

        $where = array(
            'id_cabang' => $id_cabang
        );

        $this->M_master->update_data($where, $data, 'master_cabang');
        redirect('master');
    }
}
