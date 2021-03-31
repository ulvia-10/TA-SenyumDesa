<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_donasi extends CI_Model
{
    public function getallDonasi()
    {
        return $this->db->get('data_donasi');
    }
    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_donatur', $keyword);
        $this->db->or_like('Id_donasi', $keyword);
        return $this->db->get('data_donasi')->result_array();
    }



    // proses insert
    function processInsertDonasi()
    {

        $data = array(


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



    // hapus
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


    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}