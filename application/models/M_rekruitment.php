<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_rekruitment extends CI_Model
{



    function getDataProfile() {

        $id_profile = $this->session->userdata('sess_id_profile');

        $this->db->where('id_profile', $id_profile);
        return $this->db->get('akun_profile')->row_array();
    }



    public function tambahdata( $cv, $buktibayar, $foto){
    
        $id_profile = $this->session->userdata('sess_id_profile');

        $data = array(
            
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
        $elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Akun berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
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
