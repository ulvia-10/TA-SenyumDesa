<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	
    function __construct() {
		parent::__construct();
		// load model
       	$this->load->model('M_dataakun');
       	$this->load->model('Master');
		$this->load->library('form_validation');

    }
    
	public function index()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_dataakun"
		);
		//disesuaikan sama dengan nama view$ 
		$data ['profile'] = $this->M_dataakun->get_dataakun();
		$this->load->view('templating/template_backend', $data);
		// $this->load->view('templating/datatabels_header', $data);
        // $this->load->view('templating/datatabels_sidebar', $data);
        // $this->load->view('templating/datatabels_footer', $data);
	
    
	}
	public function edit()
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_edit_dataakun"
		);
		$this->load->view('templating/template_backend', $data);
		// $this->load->view('templating/datatabels_header', $data);
        // $this->load->view('templating/datatabels_sidebar', $data);
        // $this->load->view('templating/datatabels_footer', $data);
    
	}
	public function detail($id)
	{
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_detail_dataakun"
		);
		$data['profile']= $this->M_dataakun->getProfileByID($id);
		$this->load->view('templating/template_backend', $data);
		// $this->load->view('templating/datatabels_header', $data);
        // $this->load->view('templating/datatabels_sidebar', $data);
        // $this->load->view('templating/datatabels_footer', $data);
	
	}
	public function delete($id)
	{
		$this->M_dataakun->hapusdataakun($id);
		$this->session->set_flashdata('flash-data','dihapus');
		redirect('dataakun/index','refresh');
    
	}
	public function tambah()
	{
		

		$kondisi = ['status_cabang' => "active"];
		$dataMasterCabang = $this->Master->getDataCabang( $kondisi );
		$data = array(

			'namafolder'	=> "dataakun",
			'namafileview'	=> "V_tambah_dataakun",

			// variable
			'data_master'	=> $dataMasterCabang
		);
		// $this->load->view('templating/template_backend', $data);
		$this->load->view('templating/datatabels_header', $data);
        $this->load->view('templating/datatabels_sidebar', $data);
        $this->load->view('templating/datatabels_footer', $data);
    
	}

	// proses tambah
	function prosesTambah() {

		// print_r( $this->input->post() );
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('id_profile','id_lapor','required');
		$this->form_validation->set_rules('full_name','full_name','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('level','level','required');
		$this->form_validation->set_rules('status_account','status_account','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('asal','asal','required');
		$this->form_validation->set_rules('photo','photo','required');

		if ($this->form_validation->run()==FALSE){
			$this->load->view('/user/index.php');
		}
		else{
			$upload = $this->M_dataakun->upload();
			if($upload ['result'] == 'success'){
				$this->M_dataakun->tambahdataakun($upload);
				$this->session->set_flashdata('flash-data','ditambahkan');
				redirect('akun_profile','refresh');
			}else{
				echo $upload['error'];
			}
		}
	}
}

    
