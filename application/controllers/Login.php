<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        // load model
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }


    // main view tampilan
    function index()
    {
        if ($this->session->userdata('email')) {
			redirect('akun_profile');
		}

        $data = array(
            'namafolder'    => "login",
            'namafileview'  => "V_login",
            'title'         => "Login Page | Senyum Desa"
        );
        // templating
        $this->load->view('templating/template_loginheader', $data);
        $this->load->view('templating/template_loginfooter', $data);
    }

    function register()
    {
        $data = array(
            'namafolder' => "login",
            'namafileview' => "V_register",
            'title' => "Register | Senyum Desa"

        );
      // templating
      $this->load->view('templating/template_loginheader', $data);
      $this->load->view('templating/template_loginfooter', $data);
    }

    function changepassword()
    {
        $data = array(
            'namafolder' => "login",
            'namafileview' => "V_changepassword",
            'title' => "Change Password | Senyum Desa"

        );
      // templating
      $this->load->view('templating/template_loginheader', $data);
      $this->load->view('templating/template_loginfooter', $data);
    }


    function proses_register()
    {
       	// print_r( $this->input->post() );
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('full_name','full_name','required');
		$this->form_validation->set_rules('username','username','required');
        // $this->form_validation->set_rules('email','email','required');
		// $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[6]|matches[password2]',
			[
				'matches' => 'Password Dont Match!',
				'min_length' => 'Password Dont Short!'
			]
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        // $this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('address','address','required');

        if ($this->form_validation->run()==FALSE){

			// $this->tambah();
			echo validation_errors();
          }  else{
                    $this->M_login->register();
                    redirect('akun_profile','refresh');
              
            }
        }

    function forgetpassword()
    {
        $data = array(
            'namafolder' => "login",
            'namafileview' => "V_forgetpassword",
            'title' => "Forget Password | Senyum Desa"
        );
        $this->load->view('templating/template_loginheader', $data);
      $this->load->view('templating/template_loginfooter', $data);
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


                    // add session
                    $data_session = array(

                        'sess_id_profile'   => $row['id_profile'],
                        'sess_fullname'     => $row['full_name'],
                        'sess_level'        => $row['level'],
                        'sess_foto'         => $row['photo']
                        
                    );
                    $this->session->set_userdata($data_session);

                    // switch case | pencocokan level
                    switch ($row['level']) {

                        case 'pusat':
                            # code... redirect atau link menuju ke ?
                            redirect('dashboard');
                            break;

                        case 'korwil':
                            // redirect('dashboard/indexkorwil');
                            redirect('adminkorwil/dashboard');
                            break;

                        case 'anggota':
                           redirect('rekruitment');
                            break;
                            
                        case 'calon_anggota':
                            redirect('rekruitment/indexcalonanggota');
                             break;
                    }



                    // echo "Bener ". $row['level'];
                } else {

                    echo "Mohon maaf Password yang Anda masukkan salah! Mohon coba lagi ";
                    // wrong password
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger"><small>Password Salah! </small></div>');
                    redirect('login');
                }
            } else {


                echo "Akun tidak aktif";
                //flashdata 
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><small>Akun '.$username.' tidak aktif </small></div>');
                redirect('login');
            }
        } else {

            // account not registered
            echo "account not register";

            $this->session->set_flashdata('msg', '<div class="alert alert-danger"><small>Akun ' . $username . ' tidak terdaftar</small></div>');
            redirect('login');
        }


        // bener | not registered | account status | password
    }




    // logout
    function logout()
    {

        $this->session->sess_destroy();
        redirect('login');
    }
}
