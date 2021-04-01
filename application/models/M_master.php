<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
    public function getallwilayah()
    {
        return $this->db->get('master_cabang');
    }

    public function cariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('name_cabang', $keyword);
        $this->db->or_like('id_cabang', $keyword);
        return $this->db->get('master_cabang')->result_array();
    }




    // proses insert
    function processInsertCabang()
    {

        $data = array(


            'name_cabang'   => $this->input->post('nama_cabang'),
            'status_cabang' => $this->input->post('status_cabang'),
        );

        $this->db->insert('master_cabang', $data);


        // flashdata
        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data cabang berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('master');
    }



    // hapus
    function processDeleteCabang($id_cabang)
    {


        $this->db->where('id_cabang', $id_cabang);
        $this->db->delete('master_cabang');


        // flashdata
        $elementHTML = '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> Data cabang berhasil dihapus pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        // redirect
        redirect('master');
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
