<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dataakun extends CI_Model
{
    // count all
    public function count_all(){
        return $this->db->count_all('akun_profile'); // Untuk menghitung semua data akun profile
      }
    public function get_dataakun(){ 
  
         $query = $this->db->query('SELECT a.id_profile, a.full_name,a.username,a.level,b.id_cabang,b.name_cabang from akun_profile a, master_cabang b where a.id_profile = b.id_cabang ');
         return $query;
        // return $this->db->get('akun_profile');
    }
   public function getProfileByID($id){
    $query = $this->db->get_where('akun_profile', array('id_profile'=>$id));
    return $query->row_array(); 
    $sql="SELECT a.id_profile,b.id_informasiprofile,c.id_cabang,
    a.full_name, a.username,a.level,a.status_account, a.photo, a.gender, a.tempat_lahir, a.tanggal_lahir, a.asal,
    b.telp, b.address, b.email,
    c.name_cabang, c.status_cabang
    FROM akun_profile a, data_informasiprofile b, master_cabang c
    where a.id_profile = b.id_profile = c.id_profile AND a.id_profile = '$id'";
    return $this->db->query($sql)->row_array();
   
   }
 
}