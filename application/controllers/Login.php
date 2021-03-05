<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // load model
        $this->load->model('M_login');
    }


    // main view tampilan
    function index()
    {

        $data = array(
            'namafolder'    => "login",
            'namafileview'  => "V_login"
        );
        // templating
        $this->load->view('templating/template_start', $data);
    }



    // process login
    function processLogin()
    {

        echo "Hello";
        // from view
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username
        );

        $dataAkun = $this->M_login->getDataAkun($where);


        // mengecek isi tabel
        if ($dataAkun->num_rows() > 0) {

            // alias
            $row = $dataAkun->row_array();


            // status account
            if ($row['status_account'] == "active") {

                // pencocokan password
                if (password_verify($password, $row['password'])) {


                    // switch case | pencocokan level
                    switch ($row['level']) {

                        case 'pusat':
                            # code... redirect atau link menuju ke ?
                            break;

                        case 'korwil':
                            # code...
                            break;

                        case 'anggota':
                            # code...
                            break;
                    }



                    echo "Bener";
                } else {

                    echo "pw salah";
                    // wrong password
                }
            } else {


                echo "Akun tidak aktif";
            }
        } else {

            // account not registered
            echo "account not register";

            $this->session->set_flashdata('msg', '<div class="alert alert-danger"><small>Akun ' . $username . ' tidak terdaftar</small></div>');
            redirect('login');
        }


        // bener | not registered | account status | password
    }
}