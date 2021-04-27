<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        	// load model
		$this->load->model('M_kegiatan');
		$this->load->model('M_dataakun');
		$this->load->model('M_rekruitment');
		$this->load->library('form_validation');

}
public function index()
	{
		$data = array(

			'namafolder'	=> "rekruitment",
			'namafileview'	=> "V_rekruitment",
			'title'         => "Home | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_dashboardadmin', $data);
       
	}
	public function viewprofile()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_profile",
			'title'         => "Home | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$data['profile']= $this->M_rekruitment->getDataProfile();

		// count total kegiatan 
		$data['total'] = $this->M_kegiatan->totalkegiatanid();

		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function editprofile()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_edit_profile",
			'title'         => "Edit Profile | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function listkegiatan()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_list_kegiatan",
			'title'         => "List Kegiatan | Senyum Desa"
		);
		$data['kegiatan'] = $this->M_kegiatan->timeline();
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function schedule()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_schedule",
			'title'         => "Home | Senyum Desa"
		);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function historypembayaran()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_history_pembayaran",
			'title'         => "Kas | Senyum Desa"
		);
		$data['kas']= $this->M_kegiatan->getDataKas();
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function detailpembayaran($id)
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_detail_pembayaran",
			'title'         => "Detail Kas | Senyum Desa"
		);
		$data['kas']= $this->M_kegiatan->getdetailKas($id);
		//disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}

	public function detailkegiatan($id)
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_detail_kegiatan",
			'title'         => "Detail Kegiatan | Senyum Desa"
		);
		$data['kegiatan'] = $this->M_kegiatan->getDataKegiatanid($id);
		// //disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	public function detailnotifikasi()
	{
		$data = array(

			'namafolder'	=> "anggota",
			'namafileview'	=> "V_detail_notifikasi",
			'title'         => "Detail Kegiatan | Senyum Desa"
		);
		 $data['notif'] = $this->db->get('tbl_notif')->result_array();

		// //disesuaikan sama dengan nama view$ 
		$this->load->view('templating/template_anggotanew', $data);
       
	}
	


}
?>
