<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminkorwil extends CI_Controller
{

    // Start function
    //--------------  *** Start controller session ****/--------------------------------------------------------//
    function __construct()
    {

        parent::__construct();
        $this->load->model('M_korwil');
        $this->load->model('M_master');

        // pengecekan sesi 
        if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
    }
    //--------------  *** end controller session ****/--------------------------------------------------------//

    //--------------  *** Start controller Dashboard Korwil****/--------------------------------------------------------//
    public function Dashboard()
    {
        $getProfile = $this->M_korwil->get_chart_profile();
        $getKeuangan = $this->M_korwil->get_chart_keuangan();
        $getKegiatan = $this->M_korwil->get_chart_kegiatan();
        $getWilayah = $this->M_korwil->get_chart_wilayah();

        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_dashboardkorwil",
            'title'         => "Welcome Admin Korwil | Senyum Desa",

            //variabel
            'getProfile'    => $getProfile,
            'getKeuangan'    => $getKeuangan,
            'getKegiatan'    => $getKegiatan,
            'getWilayah'    => $getWilayah

        );
        $this->load->view('templating/korwil/Template_korwil', $data);
    }
    //--------------  *** end controller Dashboard Korwil****/--------------------------------------------------------//

    //--------------  *** Start controller kegiatan Korwil****/--------------------------------------------------------//

    //tampilan information menu information Blog kegiatan
    public function informationKegiatan($id_cabang)
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_cabangkegiatan",
            'title'         => "Information Kegiatan | senyum desa"
        );

        //proses tampil cabang
        $data['data_kegiatan'] = $this->M_korwil->getallcabangkegiatan($id_cabang);
        $this->load->view('templating/korwil/template_blog', $data); //ini templatenya aku buat baru karena css dan js untuk blog dia gak muncul :( , udah tak coba berulang kali tetep gak muncul kalau pakai template korwil :)    
    }

    //tampil foto cabang
    public function cabangkegiatan()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_fotocabang",
            'title'         => "Information Cabang Kegiatan | senyum desa"
        );

        //proses tampil cabang Kegiatan
        $data['data_kegiatan'] = $this->M_korwil->cabangkegitan();
        $this->load->view('templating/korwil/template_blog', $data);
    }

    //tampilan CRUD TABEL kegiatan :)
    public function tabelKegiatan()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_tabelkegiatan",
            'title'         => "Data Tabel Kegiatan | senyum desa"
        );

        $data['data_kegiatan'] = $this->M_korwil->getalltabelkegiatan();
        $this->load->view('templating/korwil/template_korwil', $data);
    }

    //Tampil Notifikasi
    public function notifikasi()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_notifikasi",
            'title'         => "Notifikasi Kegiatan | senyum desa"
        );

        $data['notif'] = $this->db->get('tbl_notif')->result_array();
        //$data['notif'] = $this->M_korwil->Notifikasi();
        $this->load->view('templating/korwil/template_korwil', $data);
    }
    // sidebar kegiatan 
    //Tampil Notifikasi
    public function kegiatan()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_kegiatan",
            'title'         => " Kegiatan | senyum desa"
        );

        // $data['notif'] = $this->db->get('tbl_notif')->result_array();
        //$data['notif'] = $this->M_korwil->Notifikasi();
        $this->load->view('templating/korwil/template_korwil', $data);
    } 

    //Tampilan tabel Tambah cabang Kegiatan
    public function tambahKegiatan()
    {
        $getDataCabang = $this->M_master->getallwilayah();
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'    => "V_tambahcabangkegiatan",
            'title'         => "Cabang Kegiatan | Senyum Desa",

            'dataCabang'    => $getDataCabang
        );
        $this->load->view('templating/korwil/Template_korwil', $data);
    }

    //proses tabel tambah kegiatan
    function prosesTambahkegiatan()
    {
        // print_r( $this->input->post() );
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Tema', 'Tema', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('textbox', 'textbox', 'required');
        $this->form_validation->set_rules('tanggal_kejadian', 'tanggal_kejadian', 'required');
        $this->form_validation->set_rules('tanggal_berakhir', 'tanggal_berakhir', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');


        if ($this->form_validation->run() == FALSE) {
            // $this->tambah kegiatan;
            echo validation_errors();
        } else {

            // kirim data ke model 
            $this->M_korwil->tambahKegiatan();
        }
    }

    // proses hapus kegiatan
    function hapuskegiatan($id_kegiatan)
    {

        $this->M_korwil->processDeleteKorwil($id_kegiatan);
    }

    //------ Edit dan Udate -------
    public function edit($id_kegiatan)
    {
        $data['title'] = 'Edit Data | Senyum Desa';
        $data['dataCabang'] = $this->M_master->getallwilayah();

        $this->form_validation->set_rules('Tema', 'Tema', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('textbox', 'textbox', 'required');
        $this->form_validation->set_rules('tanggal_kegiatan', 'tanggal_kegiatan', 'required');
        $this->form_validation->set_rules('tanggal_berakhir', 'tanggal_berakhir', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            #code...    
            $data['data_kegiatan'] = $this->M_korwil->getKegiatanByID($id_kegiatan);

            $this->load->view('templating/korwil/template_editkorwil', $data);
            $this->load->view('korwil/V_editkegiatan', $data);
            $this->load->view('templating/korwil/template_editfooter');
        } else {
            // #code...
            $this->M_korwil->ubahdataKegiatan();
        }
    }

    //on remove edit data Kegiatan photo
    function onRemovePhoto()
    {

        $id_kegiatan  = $this->input->get('id_kegiatan');
        $index_foto = $this->input->get('index');

        $this->M_korwil->processRemovePhoto($id_kegiatan, $index_foto);
    }

    //delete notifikasi tandai semua dibaca berdasarkan id
    public function hapusnotif($id_notif)
    {
        $data = [
            'is_read' => 1
        ];
        $this->db->update('tbl_notif', $data, ['id_notif' => $id_notif]);
        //delete id notif
        $this->M_korwil->processDeleteNotif($id_notif);
        // flashdata Notifikasi
        $elementHTML = '<div class="alert alert-danger"><b>Pemberitahuan</b> <br> Notifikasi Kegiatan  sudah dibaca pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);
        return redirect(base_url('Adminkorwil/notifikasi'));
    }
    //notifikasi hapus  tandai semua dibaca
    public function hapusnotifsemua()
    {
        $notif = $this->db->get_where('tbl_notif', ['is_read' => 0])->result_array();
        for ($i = 0; $i < count($notif); $i++) {
            $data = [
                'is_read' => 1
            ];
            $this->db->update('tbl_notif', $data, ['id_notif' => $notif[$i]['id_notif']]);
        }
        // flashdata Notifikasi
        $elementHTML = '<div class="alert alert-danger"><b>Pemberitahuan</b> <br> Notifikasi Kegiatan sudah dibaca pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);
        return redirect(base_url('Adminkorwil/notifikasi'));
    }
    //hapus notif semua
    public function deletenotif()
    {
        $this->db->empty_table('tbl_notif');
        // flashdata Notifikasi
        $elementHTML = '<div class="alert alert-danger"><b>Pemberitahuan</b> <br> Tidak Ada Notifikasi Kegiatan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);
        return redirect(base_url('Adminkorwil/notifikasi'));
    }

    //--------------  *** End controller kegiatan Korwil****/--------------------------------------------------------//

    //--------------  *** Start controller keuangan****/--------------------------------------------------------//
    //tabel Keseluruhan keuangan 
    public function tabelKeuangan()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_tabelKeuangan",
            'title'         => "Kas | Senyum Desa",

            //variabel
            'masuk'   => $this->M_korwil->getTotalKeuangan("masuk"),
            'keluar'  => $this->M_korwil->getTotalKeuangan("keluar"),
        );

        $data['data_keuangan'] = $this->M_korwil->getallkeuangan();


        if ($this->input->post('keyword')) {
        }

        $this->load->view('templating/korwil/Template_korwil', $data);
    }

    //template totalkeuangan
    public function tabeltotalKeuangan()
    {
        $data = array(

            'namafolder'    => "korwil",
            'namafileview'  => "V_totalKeuangan",
            'title'         => "Kas | Senyum Desa",

            //variabel
            'masuk'   => $this->M_korwil->getTotalKeuangan("masuk"),
            'keluar'  => $this->M_korwil->getTotalKeuangan("keluar"),
        );

        $data['data_keuangan'] = $this->M_korwil->getallkeuangan();


        if ($this->input->post('keyword')) {
        }

        $this->load->view('templating/korwil/Template_korwil', $data);
    }



    //Tampilan Tambah Keuangan
    public function tambahKeuangan()
    {

        $getDataCabang = $this->M_master->getallwilayah();

        $data = array(

            'namafolder'    => "korwil",
            'namafileview'    => "V_tambahKeuangan",
            'title'         => "TambahKeuangan | Senyum Desa",

            // variable
            'dataCabang'    => $getDataCabang
        );
        $this->load->view('templating/korwil/Template_korwil', $data);
    }
    // proses tambah
    function prosesTambahKeuangan()
    {

        $this->M_korwil->processInsertKeuangan();
    }

    // proses hapus
    function hapusKeuangan($id_keuangan)
    {

        $this->M_korwil->processDeleteKeuangan($id_keuangan);
    }

    //--------------  *** END controller keuangan****/--------------------------------------------------------//

    // end function
}