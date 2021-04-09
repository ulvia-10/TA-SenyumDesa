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
        $data = array(
            'id_profile'   => $this->input->post('id_profile'),
            'full_name'    => $this->input->post('full_name'),
            'username'    => $this->input->post('username'),
            'password'     => $this->input->post('password'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'asal'          => $this->input->post('asal'),
            'gender'      => $this->input->post('gender')
        );

        // execute
        $this->db->insert( 'akun_profile', $data );
    }
}