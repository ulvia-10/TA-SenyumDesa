<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_rekruitment extends CI_Model
{

    function getDataProfile() {


        $id_profile = $this->session->userdata('sess_id_profile');
        $sql ="SELECT akun_profile.*, data_informasiprofile.*, master_cabang.name_cabang, master_cabang.status_cabang
        FROM akun_profile
        LEFT JOIN data_informasiprofile ON data_informasiprofile.id_profile = akun_profile.id_profile
        LEFT JOIN master_cabang ON master_cabang.id_cabang = akun_profile.id_cabang
       
        WHERE akun_profile.id_profile = '$id_profile'";
        $query = $this->db->query($sql)->row_array();

        return $query;
    }
   


    public function tambahdata( $cv, $buktibayar, $foto){
    
        $id_profile = $this->session->userdata('sess_id_profile');

        $data = array(
            'id_cabang'   => $this->input->post('name_cabang'),
            'full_name'    => $this->input->post('full_name'),
            'asal'         => $this->input->post('asal'),
            'reason_join'  => $this->input->post('reason_join'),
            'photo'  => $foto,
            'cv'     => $cv,
            'bukti_follow' => $this->input->post('bukti_follow'),
            'bukti_bayar'  => $buktibayar
        );
        // execute

        $this->db->where('id_profile', $id_profile);
        $this->db->update( 'akun_profile', $data );

        //flashdata 
        $elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Data berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);

        redirect('rekruitment/formulir');
    }

    public function upload( $nama_foto ){    
        $config['upload_path'] = './assets/images/';    
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $this->load->library('upload', $config);
        if($this->upload->do_upload($nama_foto)){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());     
             return $return;   
        }  
    } 
}
?>
