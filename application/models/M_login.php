<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{



    // ambil data login 
    function getDataAkun($where)
    {

        return $this->db->get_where('akun_profile', $where);
    }
}