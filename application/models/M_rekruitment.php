<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_rekruitment extends CI_Model
{
    public function tambahdata($upload){
    

        $id_user = $this->session->userdata('sess_id');

        // password hash 
        $password = password_hash( $this->input->post('password'), PASSWORD_BCRYPT );

        $data = array(
            'id_cabang'   => $this->input->post('name_cabang'),
            'id_profile'   => $this->input->post('id_profile'),
            'full_name'    => $this->input->post('full_name'),
            'username'    => $this->input->post('username'),
            // 'email'    => $this->input->post('email'),
            'password'     => $password,
            // 'telp'     => $this->input->post('telp'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'asal'    => $this->input->post('asal'),
            'gender'         => $this->input->post('gender'),
            'level'        => $this->input->post('level'),
            'status_account'   => $this->input->post('status_account'),
            // 'address'   => $this->input->post('address'),
            'photo'  => $upload ['file']['file_name'],
            'cv'  => $upload ['file']['file_name'],
            'bukti_bayar'  => $upload ['file']['file_name']
        );
        // execute
        $this->db->insert( 'akun_profile', $data );

        //flashdata 
        $elementHTML = '<div class="alert alert-primary alert-dismissible fade show"><b>Pemberitahuan</b> <br> Akun berhasil ditambahkan pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('msg', $elementHTML);

        redirect('login/index');
     
        
    }

    public function upload(){    
        $config['upload_path'] = './assets/images/';    
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('photo')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());     
             return $return;   
        }  
    } 
}
?>
