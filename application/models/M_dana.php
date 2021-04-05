<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dana extends CI_Model
{
    public function get_alldana(){
        $sql = $this->db->query('SELECT akun_profile.*, data_informasiprofile.*, master_cabang.*, data_keuangan .*
        FROM akun_profile
        
        JOIN data_informasiprofile ON data_informasiprofile.id_profile = akun_profile.id_profile
        JOIN master_cabang ON master_cabang.id_cabang = akun_profile.id_cabang
        JOIN data_keuangan ON data_keuangan.id_profile = akun_profile.id_profile 
        
        WHERE akun_profile.id_profile');
        return $sql;
    }
}