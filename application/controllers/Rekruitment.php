<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekruitment extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        	// load model
		$this->load->model('M_rekruitment');
		$this->load->model('M_dataakun');
		$this->load->library('form_validation');

		// pengecekan sesi 
		  // pengecekan sesi 
		  if (empty($this->session->userdata('sess_fullname'))) {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning"><b>Pemberitahuan</b> <br> <small>Maaf anda harus login terlebih dahulu</small></div>');
            redirect('login');
        }
}
	public function index()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_dashboard_anggota.php",
			'title'         => "Home | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggota', $data);
       
	}
	public function indexcalonanggota()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_dashboard_calon.php",
			'title'         => "Recruitment | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	public function form()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_petunjuk.php",
			'title'         => "Petunjuk Pendaftaran | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	public function profilecalon()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_profile.php",
			'title'         => "Profile | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$data['profile'] = $this->db->get_where('akun_profile', ['username' =>  $this->session->userdata('username')])->row_array();
		$this->load->view('templating/template_calonanggota', $data);

       
	}
	public function formulir()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_formulir.php",
			'title'         => "Formulir | Senyum Desa"
		);
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	public function contacts()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_contact.php",
			'title'         => "Contact Us | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	public function prosestambah($upload){
			// print_r( $this->input->post() );
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
	
			$this->form_validation->set_rules('full_name','full_name','required');
			// $this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','required');
			// $this->form_validation->set_rules('telp','telp','required');
			$this->form_validation->set_rules('asal','asal','required');
			$this->form_validation->set_rules('reason_join','reason_join','required');
			$this->form_validation->set_rules('address','address','required');
			$this->form_validation->set_rules('telp','telp','required');
			$this->form_validation->set_rules('bukti_follow','bukti_follow','required');
	
		
			if ($this->form_validation->run()==FALSE){
	
				// $this->tambah();
				echo validation_errors();
			}
			else{
				$upload = $this->M_rekruitment->upload();
				if($upload ['result'] == 'success'){
					$this->M_rekruitment->tambahdata($upload);
					$this->session->set_flashdata('flash-data','ditambahkan');
					redirect('akun_profile','refresh');
				}else{
					echo $upload['error'];
				}
			}
	}



}
?>
