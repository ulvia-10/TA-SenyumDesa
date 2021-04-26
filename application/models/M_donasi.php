<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_donasi extends CI_Model
{
    //tampilan Donasi
    public function getallDonasi()
    {
        $this->db->select('data_donasi.Id_donasi, data_donasi.no_rekening, data_donasi.nama_donatur, data_donasi.tgl_donasi, master_cabang.id_cabang, master_cabang.name_cabang')
            ->from('data_donasi')
            ->join('master_cabang', 'data_donasi.id_cabang = master_cabang.id_cabang');
        return $this->db->get();
    }
    //tampilan Cari Data
    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_donatur', $keyword);
        $this->db->or_like('Id_donasi', $keyword);
        return $this->db->get('data_donasi')->result_array();
    }

    // Proses Tambah Donasi
    function processInsertDonasi()
    {

        $data = array(

            'id_cabang'  => $this->input->post('cabang'),
            'no_rekening'   => $this->input->post('no_rekening'),
            'nama_donatur'   => $this->input->post('nama_donatur'),
            'status' => $this->input->post('status'),
            'jml_donasi' => $this->input->post('jml_donasi'),

        );

        $this->db->insert('data_donasi', $data);


        // flashdata
        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Donasi berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('Donasi');
    }

    // Menunjukan Semua Detail DOnasi
    function getallDetail()
    {
        $this->db->select('*');
        $this->db->from('data_donasi');
        $this->db->join('master_cabang', 'data_donasi.Id_donasi=master_cabang.id_cabang');
        $query = $this->db->get();
        //return $query->result();
    }

    // hapus Donasi
    function processDeleteDonasi($Id_donasi)
    {
        $this->db->where('Id_donasi', $Id_donasi);
        $this->db->delete('data_donasi');
        // flashdata
        $elementHTML = '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> Data Donasi berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);
        // redirect
        redirect('Donasi');
    }

    //edit donasi
    /**===========================================================*/
    /** Fungsi UPDATE */

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Donasi berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);
    }
    /**===========================================================*/
}