<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dataakun extends CI_Model
{

    public function get_dataakun()
    {

        $query = $this->db->query('SELECT a.id_profile, a.full_name,a.username,a.level,a.photo, b.id_cabang,b.name_cabang 
        from akun_profile a, master_cabang b 
        where a.id_cabang = b.id_cabang');
        return $query;
    }
    public function get_allakun()
    {
        $sql = "SELECT akun_profile.*, data_informasiprofile.*, master_cabang.*
            FROM akun_profile
            
            LEFT JOIN data_informasiprofile ON data_informasiprofile.id_profile = akun_profile.id_profile
            JOIN master_cabang ON master_cabang.id_cabang = akun_profile.id_cabang
            
            
            WHERE akun_profile.id_profile";
        return $this->db->query($sql)->row_array();
    }

    public function getProfileByID($id)
    {

        $sql = "SELECT akun_profile.*, data_informasiprofile.*, master_cabang.*
            FROM akun_profile
            
            LEFT JOIN data_informasiprofile ON data_informasiprofile.id_profile = akun_profile.id_profile
            JOIN master_cabang ON master_cabang.id_cabang = akun_profile.id_cabang
            
            
            WHERE akun_profile.id_profile = '$id'";

        return $this->db->query($sql)->row_array();
    }

    public function editdata($upload)
    {
        $id_profile = $this->input->post('id_profile');

        $data = [

            'full_name'    => $this->input->post('full_name'),
            'id_cabang'    => $this->input->post('name_cabang'),
            'username'    => $this->input->post('username'),
            // 'email'    => $this->input->post('email'),
            'password'     => $this->input->post('password'),
            // 'telp'     => $this->input->post('telp'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'asal'    => $this->input->post('asal'),
            'gender'         => $this->input->post('gender'),
            'level'        => $this->input->post('level'),
            'status_account'   => $this->input->post('status_account'),
            // 'address'   => $this->input->post('address'),
            'photo'  => $upload['file']['file_name']
        ];

        // $this->db->where('id_profile',  $id_profile);
        // $this->db->update('akun_profile', $data);
        //flashdata 
        print_r($data);
        $msg = '<div class="alert alert-info">Akun berhasil diperbarui <br><small>Pada tanggal ' . date('d F Y H.i A') . '</small></div>';
        $this->session->set_flashdata('flash-data', $msg);
        //redirect 
        redirect('data_akun/edit/' . $id_profile);
    }

    public function hapusdataakun($id)
    {
        $this->db->where('id_profile', $id);
        $this->db->delete('akun_profile');


        //flashdata 
        $elementHTML = '<div class="alert alert-secondary"><b>Pemberitahuan</b> <br> Akun berhasil dihapus </div>';
        $this->session->set_flashdata('msg', $elementHTML);

        //redirect
        redirect('data_akun', 'refresh');
    }

    //proses Tambah Akun
    public function processInsertAkun($data)
    {
        try {
            $this->db->insert('akun_profile', $data);
            return true;
        } catch (Exception $e) {
        }
    }
}
