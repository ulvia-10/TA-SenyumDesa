<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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
            'namafolder'    => "page",
            'namafileview'  => "V_page",
            'title'         => "Senyum Desa"
        );
        // templating
        $this->load->view('templating/template_headerpage', $data);
        $this->load->view('templating/template_footerpage', $data);
    }
    function about()
    {

        $data = array(
            'namafolder'    => "page",
            'namafileview'  => "V_about",
            'title'         => "Senyum Desa"
        );
        // templating
        $this->load->view('templating/template_headerpage', $data);
        $this->load->view('templating/template_footerpage', $data);
    }
}