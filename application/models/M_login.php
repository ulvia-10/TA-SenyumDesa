<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    
    // ambil data login 
    function getDataAkun($where)
    {

        return $this->db->get_where('akun_profile', $where);
    }

    function register(){
        // password hash 
        $password = password_hash( $this->input->post('password'), PASSWORD_BCRYPT );

        $dataProfile = array(
            'id_profile'    => $this->input->post('id_profile'),
            'full_name'    => $this->input->post('full_name'),
            'username'    => $this->input->post('username'),
            'password'     => $password,
            'level'     => "calon_anggota",
            'gender'      => $this->input->post('gender'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
        );

        $this->db->insert('akun_profile', $dataProfile);

        // ambil id_profile yang terakhir kali di masukkan
        $ambilId_profile = $this->db->insert_id();

        // tabel informasiprofile 
        $dataInformasiProfile = array(

            'telp'          => $this->input->post('telp'),
            'address'       => $this->input->post('address'),
            'email'         => $this->input->post('email'),
            'id_profile'    => $ambilId_profile
        );

        // execute
        $this->db->insert( 'data_informasiprofile', $dataInformasiProfile );

        //flashdata 
        $elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Akun berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);
 
        redirect('login/index');
      
    }
}