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

        $data = array(
            'id_profile'   => $this->input->post('id_profile'),
            'full_name'    => $this->input->post('full_name'),
            'username'    => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'password'     => $password,
            'gender'      => $this->input->post('gender'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'alamat'          => $this->input->post('alamat')
        );

        // execute
        $this->db->insert( 'akun_profile', $data );
         //flashdata 
         $elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Akun berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
         $this->session->set_flashdata('msg', $elementHTML);
 
         redirect('login/register');
      
    }
}