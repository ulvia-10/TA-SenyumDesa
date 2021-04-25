<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kegiatan extends CI_Model
{
    public function getDataKas()
    {
        $id_profile = $this->session->userdata('sess_id_profile');
        $sql ="SELECT akun_profile.*, data_keuangan.*
        FROM data_keuangan
        LEFT JOIN akun_profile ON akun_profile.id_profile = data_keuangan.id_keuangan
    
        WHERE data_keuangan.id_profile = '$id_profile'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    public function getdetailKas($id){
        $sql ="SELECT akun_profile.*, data_keuangan.*
        FROM data_keuangan
        LEFT JOIN akun_profile ON akun_profile.id_keuangan = data_keuangan.id_keuangan
    
        WHERE data_keuangan.id_keuangan = '$id'";
        return $this->db->query($sql)->row_array();
    }

    public function totalkegiatanid(){
            $id_profile = $this->session->userdata('sess_id_profile');
            $sql = "SELECT COUNT(id_kegiatan)from data_kegiatan where id_profile = '$id_profile' ";
            $query = $this->db->query($sql);
            return $query->num_rows();
    }

    public function timeline(){
        $id_profile = $this->session->userdata('sess_id_profile');
        $sql= "SELECT akun_profile.*, data_kegiatan.*
        FROM data_kegiatan
       
        LEFT JOIN akun_profile ON akun_profile.id_kegiatan = akun_profile.id_kegiatan   
       
        WHERE data_kegiatan.id_profile  = '$id_profile'AND data_kegiatan.status = 'publish'";
        return $this ->db->query($sql);

    }
    public function getDataKegiatanid($id){
        $sql = "SELECT akun_profile.*, data_kegiatan.*
        FROM data_kegiatan
        
        LEFT JOIN akun_profile ON akun_profile.id_kegiatan = data_kegiatan.id_kegiatan   
       
          WHERE data_kegiatan.id_kegiatan  =  '$id'";

        return $this->db->query($sql)->row_array();
    }
    public function getNotifikasi(){
        
    }
}
