<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_korwil extends CI_Model
{

    //start function
    //--------------  *** Start model Dashboard Korwil****/--------------------------------------------------------//
    public function get_chart_profile()
    {
        $query = $this->db->get('akun_profile');
        return $query->num_rows();
    }

    public function get_chart_keuangan()
    {
        $query = $this->db->get('data_keuangan');
        return $query->num_rows();
    }

    public function get_chart_kegiatan()
    {
        $query = $this->db->get('data_kegiatan');
        return $query->num_rows();
    }
    public function get_chart_wilayah()
    {
        $query = $this->db->get('master_cabang');
        return $query->num_rows();
    }
    //--------------  *** end model Dashboard Korwil****/--------------------------------------------------------//

    //--------------  *** Start model kegiatan Korwil****/--------------------------------------------------------//

    //Notifikasi 
    public function Notifikasi()
    {
        $this->db->select('tbl_notif.id_notif,tbl_notif.tanggal_notifikasi, tbl_notif.judul,tbl_notif.Tema, data_kegiatan.id_kegiatan,data_kegiatan.id_cabang')
            ->from('tbl_notif')
            ->join('data_kegiatan', 'tbl_notif.id_kegiatan = data_kegiatan.id_kegiatan');

        return $this->db->get();
    }
    //tampilan information kegiatan
    public function getallcabangkegiatan($id_cabang)
    {
        $this->db->select('data_kegiatan.id_kegiatan,data_kegiatan.created_at, data_kegiatan.judul, data_kegiatan.textbox,data_kegiatan.namaberkas, master_cabang.id_cabang, master_cabang.name_cabang, master_cabang.photo')
            ->from('data_kegiatan')
            ->join('master_cabang', 'data_kegiatan.id_cabang = master_cabang.id_cabang');

        $this->db->where('data_kegiatan.id_cabang', $id_cabang);
        return $this->db->get();
    }
    //tampil foto cabang
    public function cabangkegitan()
    {
        $this->db->select('data_kegiatan.id_kegiatan,master_cabang.id_cabang,master_cabang.photo, master_cabang.name_cabang,master_cabang.status_cabang')
            ->from('data_kegiatan')
            ->join('master_cabang', 'data_kegiatan.id_cabang = master_cabang.id_cabang');
        return $this->db->get();
    }
    //tampil tabel Cabang
    public function getalltabelkegiatan()
    {
        $this->db->select('data_kegiatan.id_kegiatan,data_kegiatan.created_at,data_kegiatan.Tema, data_kegiatan.status, master_cabang.id_cabang, master_cabang.name_cabang, master_cabang.photo')
            ->from('data_kegiatan')
            ->join('master_cabang', 'data_kegiatan.id_cabang = master_cabang.id_cabang');
        return $this->db->get();
    }
    //edit ngambil berdasarkan id kegiatan
    public function getKegiatanByID($id_kegiatan)
    {
        $sql = "SELECT a.id_kegiatan,b.id_cabang,b.name_cabang,a.Tema,a.judul,a.tanggal_kegiatan,a.tanggal_berakhir, a.namaberkas, a.status, a.textbox,a.created_at
            FROM data_kegiatan a, master_cabang b 
            where a.id_cabang = b.id_cabang AND a.id_kegiatan = '$id_kegiatan'";

        return $this->db->query($sql)->row_array();
    }

    // Proses tabel tambah kegiatan Multiple 
    public function tambahKegiatan()
    {
        $upload = "";

        $id_profile = $this->session->userdata('sess_id_profile');

        $dataUploaded = array();
        $dataError    = array();


        for ($i = 0; $i < count($_FILES['namaberkas']['name']); $i++) {

            $_FILES['namaberkas[]']['name']     = $_FILES['namaberkas']['name'][$i];
            $_FILES['namaberkas[]']['type']     = $_FILES['namaberkas']['type'][$i];
            $_FILES['namaberkas[]']['tmp_name']  = $_FILES['namaberkas']['tmp_name'][$i];
            $_FILES['namaberkas[]']['error']     = $_FILES['namaberkas']['error'][$i];
            $_FILES['namaberkas[]']['size']     = $_FILES['namaberkas']['size'][$i];


            // name = variable.jpg 
            // type = .jpg 
            // alamat memori
            // error file
            // 52 kb

            $config['upload_path']          = './assets/images/'; // direktori lokal
            $config['allowed_types']        = 'jpeg|jpg|png'; // ekstensi
            $config['max_size']             = 3000; // 3 mb

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // check data upload 
            if (!$this->upload->do_upload('namaberkas[]')) {

                array_push($dataError, array(

                    'name'  => $_FILES['namaberkas']['name'][$i],
                    'error' => $this->upload->display_errors()
                ));
            } else {

                array_push($dataUploaded, $this->upload->data('file_name'));
            }
        }

        // sesi insert
        if (count($dataError) > 0) { // upload error



            $file_gagalupload = "";
            foreach ($dataError as $row) {

                $file_gagalupload .= '<p>- ' . $row['name'] . ' <br> ' . $row['error'] . '</p>';
            }

            $pesan = '<div class="alert alert-danger">Pemberitahuan <br> ' . $file_gagalupload . '</div>';
            $this->session->set_flashdata('msg', $pesan);

            redirect('Adminkorwil/tabelKegiatan');
        } else {

            $upload = implode(',', $dataUploaded);
        }

        $data = array(
            'id_cabang'  => $this->input->post('cabang'),
            'id_profile' => $id_profile,
            'Tema'    => $this->input->post('Tema'),
            'judul'    => $this->input->post('judul'),
            'textbox'    => $this->input->post('textbox'),
            'tanggal_kegiatan'    => $this->input->post('tanggal_kegiatan'),
            'tanggal_berakhir'    => $this->input->post('tanggal_berakhir'),
            'status'    => $this->input->post('status'),
            'namaberkas'  => $upload,
        );

        $notif = [
            'name_cabang' => 'Dari Wilayah <br>' . $this->input->post('cabang'),
            'Tema' => $this->input->post('Tema'),
            'judul' => $this->input->post('judul'),
            'pesan' => $this->input->post('textbox'),
            'is_read' => 0
        ];

        // execute
        $this->db->insert('data_kegiatan', $data);
        $this->db->insert('tbl_notif', $notif);

        //flashdata 
        $pesan = '<div class="alert alert-info">Data Kegiatan Berhasil Disimpan! </div>';


        $this->session->set_flashdata('msg', $pesan);

        redirect('Adminkorwil/tabelKegiatan');
    }

    // hapus data kegiatan
    function processDeleteKorwil($id_kegiatan)
    {

        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->delete('data_kegiatan');


        // flashdata
        $elementHTML = '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> Data kegiatan berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);

        // redirect
        redirect('Adminkorwil/tabelKegiatan');
    }

    //delete notifikasi per Id
    function processDeleteNotif($id_notif)
    {

        $this->db->where('id_notif', $id_notif);
        $this->db->delete('tbl_notif');
    }

    // edit dan update kegiatan
    public function ubahdataKegiatan()
    {


        $id_kegiatan = $this->input->post('id_kegiatan');

        $config['upload_path']          = './assets/images/'; // direktori lokal
        $config['allowed_types']        = 'jpeg|jpg|png'; // ekstensi
        $config['max_size']             = 3000; // 3 mb
        $config['file_name']            = uniqid(); // generate id yang bersifat uniq dari php

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $photo = "";

        if (!empty($_FILES['namaberkas']['name'])) {

            // check data upload 
            if (!$this->upload->do_upload('namaberkas')) {

                $upload_error = $this->upload->display_errors();

                $msg = '<div class="alert alert-danger">Informasi Kegiatan gagal diperbarui <br> <p>' . $upload_error . '</p> <small>Pada tanggal ' . date('d F Y H.i A') . '</small></div>';
                $this->session->set_flashdata('flash-data', $msg);
                redirect('Adminkorwil/edit/' . $id_kegiatan);
            } else {

                $new_photo = $this->upload->data('file_name');  // new file
                $dataKegiatanById = $this->db->get_where('data_kegiatan', ['id_kegiatan' => $id_kegiatan])->row();

                if ($dataKegiatanById->namaberkas) {

                    $data_foto = explode(',', $dataKegiatanById->namaberkas);

                    array_push($data_foto, $new_photo);

                    // implode  
                    if (count($data_foto) > 1) {

                        $photo = implode(',', $data_foto);
                    } else { // jika data foto hnaya 1

                        $photo = $new_photo;
                    }
                } else {

                    $photo = $new_photo;
                }
            }
        } else {

            $dataKegiatanById = $this->db->get_where('data_kegiatan', ['id_kegiatan' => $id_kegiatan])->row();
            $photo = $dataKegiatanById->namaberkas;
        }


        $data = [

            "Tema"    => $this->input->post('Tema', true),
            "judul"     => $this->input->post('judul', true),
            "textbox"     => $this->input->post('textbox', true),
            "tanggal_kegiatan"        => $this->input->post('tanggal_kegiatan', true),
            "tanggal_berakhir"   => $this->input->post('tanggal_berakhir', true),
            "status"     => $this->input->post('status', true),
            'namaberkas' => $photo
        ];

        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->update('data_kegiatan', $data);



        $msg = '<div class="alert alert-info">Informasi Kegiatan berhasil diperbarui <br><small>Pada tanggal ' . date('d F Y H.i A') . '</small></div>';
        $this->session->set_flashdata('flash-data', $msg);
        redirect('Adminkorwil/edit/' . $id_kegiatan);
    }



    //Hapus Edit Photo
    function processRemovePhoto($id_kegiatan, $index)
    {


        $getDataKegiatanById = $this->db->get_where('data_kegiatan', ['id_kegiatan' => $id_kegiatan])->row();

        $data_photo = explode(',', $getDataKegiatanById->namaberkas);

        $new_photoupdate = array();
        for ($i = 0; $i < count($data_photo); $i++) {

            if ($i != $index) {

                array_push($new_photoupdate, $data_photo[$i]);
            }
        }

        $konversiComma = implode(',', $new_photoupdate);

        $dataUpdate = array(

            'namaberkas'  => $konversiComma
        );

        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->update('data_kegiatan', $dataUpdate);

        redirect('Adminkorwil/edit/' . $id_kegiatan);


        /**
         * 
         *  kolom tb = img1, img 2, img 3 
         *  $data_photo = [img1, img2, img3]; 
         *  
         *  // Perulangan 1  | $i = 0; $index = 1;
         *  - apakah 0 < 3 ? 
         *     a. iya | apakah $i tidak sama dengan $index ? 
         *          -- iya maka foto index ke - i  (img1 masuk)
         *  
         *  // perulangan 2 | $i = 1; $index = 1; 
         *  - apakah 1 < 3 ? 
         *      a. iya | apakah $i tidak sama dengan $index ? 
         *          -- tidak maka foto index ke - i (img2 tidak masuk)
         * 
         *  // Perulangan 3 | $i = 2; $index = 1; 
         *  - apakah 2 < 3 ? 
         *      a. iya | apakah $i tidak sama dengan $index ? 
         *          -- iya maka foto index ke - i  (img3 masuk)
         * 
         *  // Perulangan 4 | $i = 3; $index = 1; 
         *  - apakah 3 < 3 ? 
         *      b. enggak | stop perulangan ... 
         * 
         * 
         *  // summary 
         *  nilai yang masuk = img1, img3
         * 
         * 
         *  update kolom foto yang di tabel ... 
         */
    }


    //--------------  *** end model kegiatan Korwil****/--------------------------------------------------------//

    //--------------  *** start model keuangan Korwil****/--------------------------------------------------------//
    //Menampilkan Seluruh Tabel Keuangan
    public function getallkeuangan()
    {
        $this->db->select('data_keuangan.id_keuangan,data_keuangan.jenis_keuangan,data_keuangan.judul,data_keuangan.nominal,data_keuangan.tanggal_laporan, master_cabang.id_cabang, master_cabang.name_cabang')
            ->from('data_keuangan')
            ->join('master_cabang', 'data_keuangan.id_cabang = master_cabang.id_cabang');
        return $this->db->get();
    }
    //Tambah Keuangang
    // proses insert/tambah data
    function processInsertKeuangan()
    {

        $id_profile = $this->session->userdata('sess_id_profile');

        $data = array(
            'id_cabang'  => $this->input->post('cabang'),
            'id_profile' => $id_profile,
            'judul'   => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jenis_keuangan' => $this->input->post('jenis_keuangan'),
            'nominal' => $this->input->post('nominal'),
            'tipe' => $this->input->post('tipe'),
        );
        $this->db->insert('data_keuangan', $data);


        // flashdata
        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Keuangan berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('Adminkorwil/tabelKeuangan');
    }

    // hapus dataKeuangan
    function processDeleteKeuangan($id_keuangan)
    {


        $this->db->where('id_keuangan', $id_keuangan);
        $this->db->delete('data_keuangan');


        // flashdata
        $elementHTML = '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> Data keuangan berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('Adminkorwil/tabelKeuangan');
    }


    // 
    function getTotalKeuangan($jenis_keuangan)
    {

        $sql = "SELECT SUM(nominal) AS TOTAL FROM data_keuangan WHERE jenis_keuangan = '$jenis_keuangan'";
        return $this->db->query($sql)->row();
    }



    //--------------  *** end model keuangan Korwil****/--------------------------------------------------------//
}