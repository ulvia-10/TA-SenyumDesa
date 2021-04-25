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
		$this->load->model('M_master');
		$this->load->model('M_login');
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
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function indexcalonanggota()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_dashboard_calon.php",
			'title'         => "Recruitment | Senyum Desa"
		);
		$data['profile']= $this->M_rekruitment->getDataProfile();
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
		$data['profile']= $this->M_rekruitment->getDataProfile();
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
		// $data['profile'] = $this->db->get_where('akun_profile', ['full_name' =>  $this->session->userdata('full_name')])->row_array();
		// // //disesuaikan sama dengan nama view$ 
		$data['profile']= $this->M_rekruitment->getDataProfile();

		
		$this->load->view('templating/template_calonanggota', $data);

       
	}
	
	public function formulir()
	{
		$dataMasterCabang = $this->M_master->getallwilayah();

		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_formulir.php",
			'title'         => "Formulir | Senyum Desa",

			'profile'	=> $this->M_rekruitment->getDataProfile(),
	
			// // variable
			'data_master'	=> $dataMasterCabang

		);
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	public function contacts()
	{
		$data = array(

			'namafolder'	=> "calon_anggota",
			'namafileview'	=> "V_contact.php",
			'title'         => "Contact Us | Senyum Desa",
		);
		//disesuaikan sama dengan nama view$ 
		$data['profile']= $this->M_rekruitment->getDataProfile();
		$this->load->view('templating/template_calonanggota', $data);
       
	}
	// public function totalKegiatan(){
	// 	sele
	// }
	public function prosestambah(){
			// print_r( $this->input->post() );
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
	
			$this->form_validation->set_rules('full_name','full_name','required');
			// $this->form_validation->set_rules('email','email','required');
			// $this->form_validation->set_rules('telp','telp','required');
			$this->form_validation->set_rules('asal','asal','required');
			$this->form_validation->set_rules('reason_join','reason_join','required');
			$this->form_validation->set_rules('bukti_follow','bukti_follow','required');
	
		
			if ($this->form_validation->run()==FALSE){
	
				// $this->tambah();
				echo validation_errors();
			}
			else{
				$uploadCV = $this->M_rekruitment->upload('cv');
				$uploadBuktiBayar = $this->M_rekruitment->upload('bukti_bayar');
				$uploadFoto = $this->M_rekruitment->upload('photo');
				
				// status kondisi upload multiple | 0 = error semua | 1 = sebagian error | 2 = sebagian | 3 = berhasil semua
				$kondisi = 0;


				if ( $uploadCV['result'] == "success" ) $kondisi++;
				if ( $uploadBuktiBayar['result'] == "success" ) $kondisi++;
				if ( $uploadFoto['result'] == "success" ) $kondisi++;


				if ( $kondisi == 3 ) { // sudah berhasil input semua ? 


					// variable upload 
					$cv  = $uploadCV['file']['file_name'];
					$buktibayar  = $uploadBuktiBayar['file']['file_name'];
					$foto  = $uploadFoto['file']['file_name'];

					$this->M_rekruitment->tambahdata( $cv, $buktibayar, $foto );
					$this->session->set_flashdata('flash-data','ditambahkan');

				} else {

					echo $uploadCV['error'];
					echo '<hr>';
					
					echo $uploadBuktiBayar['error'];
					echo '<hr>';

					echo $uploadFoto['error'];
					echo '<hr>';

					
				}
			}
	}



}
?>
