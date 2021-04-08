<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_keuangan extends CI_Model
{
    public function getallkeuangan()
    {
        $query  = $this->db->query('SELECT a.id_keuangan, a.judul, a.jenis_keuangan, a.tanggal_laporan, b.id_cabang, b.name_cabang
        from data_keuangan a, master_cabang b
        where a.id_cabang = b.id_cabang');
        return $query;
    }

    // proses  cari data
    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('judul', $keyword);
        $this->db->or_like('id_keuangan', $keyword);
        return $this->db->get('data_keuangan')->result_array();
    }

    // proses detail
    public function detailKeuangan($id_keuangan)
    {
        return $this->db->table('data_keuangan')
            ->join('master_cabang', 'master_cabang.id_cabang = data_keuangan.id_keuangan', 'Left')
            ->join('akun_profile', 'akun_profile.id_profile = data_keuangan.id_keuangan', 'left')
            ->where('id_keuangan', $id_keuangan)
            ->get()
            ->getResultArray();
    }

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
        redirect('Keuangan');
    }



    // hapus data
    function processDeleteKeuangan($id_keuangan)
    {


        $this->db->where('id_keuangan', $id_keuangan);
        $this->db->delete('data_keuangan');


        // flashdata
        $elementHTML = '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> Data keuangan berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('keuangan');
    }


    //proses Edit
    public function edit($data)
    {
        $this->db->table('data_keuangan')
            ->where('id_keuangan', $data['id_keuangan'])
            ->update($data);
    }

    public function ubahdata()
    {


        $id_keuangan = $this->input->post('id_keuangan');

        $data = [
            "id_cabang"   => $this->input->post('name_cabang', true),
            "judul"    => $this->input->post('judul', true),
            "deskripsi"        => $this->input->post('deskripsi', true),
            "jenis_keuangan"     => $this->input->post('jenis_keuangan', true),
            "tipe"     => $this->input->post('tipe', true),
            "tanggal_laporan"   => $this->input->post('tanggal_laporan', true),
        ];

        $this->db->where('id_keuangan', $id_keuangan);
        $this->db->update('data_keuangan', $data);

        $msg = '<div class="alert alert-info">Informasi pelaporan berhasil diperbarui <br><small>Pada tanggal ' . date('d F Y H.i A') . '</small></div>';
        $this->session->set_flashdata('flash-data', $msg);
        redirect('Keuangan/index' . $id_keuangan);
    }
}
