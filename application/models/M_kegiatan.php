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
        $sql= " SELECT akun_profile.*, data_kegiatan.*
        FROM akun_profile
       
        LEFT JOIN data_kegiatan ON akun_profile.id_profile = akun_profile.id_profile   
       
        WHERE akun_profile.id_profile  = '$id_profile'AND data_kegiatan.status = 'publish'";
       
        return $this ->db->query($sql);

    }
    public function getDataKegiatanid($id){
        $sql = " SELECT akun_profile.*, data_kegiatan.*
        FROM data_kegiatan
        JOIN akun_profile ON akun_profile.id_profile = data_kegiatan.id_profile
        WHERE data_kegiatan.id_kegiatan = '$id'";

        return $this->db->query($sql)->row_array();
    } 
    public function getNotifikasi(){
        
    }
    public function datakegiatan( $status ){
        $id_cabang = $this->session->userdata('sess_id_cabang');
        $sql =" SELECT data_kegiatan.*,master_cabang.*
        FROM data_kegiatan
        JOIN master_cabang ON master_cabang.id_cabang = data_kegiatan.id_cabang
        
        WHERE data_kegiatan.id_cabang = '$id_cabang' AND data_kegiatan.status = '$status'";
        return $this->db->query($sql)->result_array();

        // 1 data atau 1 baris | setting | detail profile | identitas dsb
        // row_array()    = $row['username']
        // row             = $row->username

        // lebih dari 1 data seperti rekapan | data master | dkk 
        // result_array() = $row['mahasiswa']
        // result         = $row->mahasiswa

        
        
    }
    public function tambahkegiatankorwil(){
        $id_cabang = $this->session->userdata('sess_id_cabang');
        $id_profile = $this->session->userdata('sess_id_profile');
        $data=[
            
            'id_cabang' => $id_cabang,
            'deskripsi' => "",
            'judul' => "",
            'tema'  => "",
            'textbox'   => "",
            'namaberkas'    => "",
            'id_profile'    => $id_profile,
            'gambar'    => "",
            'tanggal_kegiatan'  => "",
            'tanggal_berakhir'  => "",
            'status'    => "",

            
        ];
        $this->db->insert('data_kegiatan', $data);

    }
}
