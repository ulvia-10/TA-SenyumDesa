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
            'title'         => "Master Cabang | Senyum Desa"
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
            'namafileview'    => "V_master_cabang",
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

    public function edit()
    {
        $data = array(

            'namafolder'    => "master",
            'namafileview'    => "V_master_cabang",
            'title'         => "Master Cabang"
        );
        $this->load->view('templating/Template_dashboardadmin', $data);
    }

    // proses sistem mastercabang


    // proses tambah
    public function prosesTambah()
    {
        $data = array();

        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->M_master->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di M_master.php untuk menyimpan data ke database
                $this->M_master->save($upload);

                redirect('Master/index'); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $this->session->set_flashdata('flash-data', 'ditambahkan'); // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }
    }

    // proses hapus
    function hapus($id_cabang)
    {

        $this->M_master->processDeleteCabang($id_cabang);
    }

    // Multiple Delete
    function delete()
    {
        if ($this->input->post('checkbox_value')) {
            $id_cabang = $this->input->post('checkbox_value');
            for ($count = 0; $count < count($id_cabang); $count++) {
                $this->M_master->delete($id_cabang[$count]);
            }
        }
    }


    //Proses Edit Cabang
    public function update()
    {
        $id_cabang = $this->uri->segment(3);

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']    = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) //sesuai dengan name pada form 
        {
            echo 'anda belum upload';
        } else {
            //tampung data dari form
            $name_cabang = $this->input->post('name_cabang');
            $status_cabang = $this->input->post('status_cabang');
            $file = $this->upload->data();
            $photo = $file['file_name'];

            $this->M_master->update(
                array(
                    'name_cabang' => $name_cabang,
                    'status_cabang' => $status_cabang,
                    'photo' => $photo
                ),
                array(
                    'id_cabang' => $this->input->post('id_cabang')
                )
            );
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('master/index');
        }

        $data['master_cabang'] = $this->M_master->get_by_id($id_cabang);
        $this->load->view('templating/dashboardadmin/template_dashboardadmin2', $data);
        $this->load->view('master/V_editmaster_cabang', $data);
        $this->load->view('templating/dashboardadmin/template_footer', $data);
    }
}