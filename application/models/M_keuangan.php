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
    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('judul', $keyword);
        $this->db->or_like('id_keuangan', $keyword);
        return $this->db->get('data_keuangan')->result_array();
    }

    // proses insert
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



    // hapus
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


    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Cabang Berhasil Di Update ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);
    }
}
