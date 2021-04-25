<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // load model
        $this->load->model('M_login');
        $this->load->model('M_dataakun');
        $this->load->model('M_rekruitment');
    }


    // main view tampilan
    function index()
    {

        $data = array(
            'namafolder'    => "profile",
            'namafileview'  => "V_editProfile",
            'title'         => "Profile | Senyum Desa"
        );
        $data['profile']= $this->M_rekruitment->getDataProfile();
        $this->load->view('templating/template_dashboardadmin', $data);
        // templating
     
    }

    public function prosesedit($id_profile)
    {
        $data['title'] = 'Edit | Donasi';

        // $where = array('id_profile' => $id_profile);
        $data['profile']= $this->M_dataakun->getProfileByID($id);
        // $data['akun_profile'] = $this->M_profile->edit_data($where, 'akun_profile')->result();
        $this->load->view('templating/dashboardadmin/Template_dashboardadmin2');
        $this->load->view('Donasi/V_editprofile', $data);
        $this->load->view('templating/dashboardadmin/template_footer');
    }
    public function changepassword(){
        
    }

    function update()
    {

        $id_profile = $this->input->post('id_profile');
        $username = $this->input->post('username');
        $full_name = $this->input->post('full_name');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $asal = $this->input->post('asal');
        $gender = $this->input->post('gender');
        $reason_join = $this->input->post('reason_join');

        $data = array(
            'username' => $username,
            'full_name' => $full_name,
            'tempat_lahir'   => $tempat_lahir,
            'asal'   => $asal,
            'reason_join'   => $reason_join,

        );

        $where = array(
            'id_profile' => $id_profile
        );

        // flashdata
        $elementHTML = '<div class="alert alert-success"><b>Pemberitahuan</b> <br> Data Donasi berhasil diupdate pada ' . date('d F Y H.i A') . '</div>';
        $this->session->set_flashdata('pesan', $elementHTML);

        $this->M_Profile->update_data($where, $data, 'akun_profile');
        redirect('Profile');
    }
}
