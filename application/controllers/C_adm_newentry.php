<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_adm_newentry extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
	}
	
	public function index(){

		$this->load->view('navbar');
		$this->load->view('admin/tambah_admin');
	}

	public function newEntry(){
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim'); 
		//is_unique[karyawan.nik]
		
		$this->form_validation->set_rules('divisi', 'Divisi', 'required|trim');
		$this->form_validation->set_rules('bagian', 'Bagian', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('start_periode', 'Periode mulai', 'required|trim');
		$this->form_validation->set_rules('end_periode', 'Periode akhir', 'required|trim');

		$this->form_validation->set_rules('sakit', 'Sakit', 'required|trim',[
			'required' => 'Field required'
		]);
		$this->form_validation->set_rules('izin', 'Izin', 'required|trim',[
			'required' => 'Field required'
		]);
		$this->form_validation->set_rules('alpa', 'Alpa', 'required|trim',[
			'required' => 'Field required'
		]);
		$this->form_validation->set_rules('atelat', 'Absen Telat', 'required|trim',[
			'required' => 'Field required'
		]);

		if($this->form_validation->run() == false){
			$this->load->view('navbar');
			$this->load->view('admin/tambah_admin');
		}
		else {
			// $data_abs = [
			// 	'nik' => $this->input->post('nik'),
			// 	'sakit' => $this->input->post('sakit'),
			// 	'izin' => $this->input->post('izin'),
			// 	'alpa' => $this->input->post('alpa'),
			// 	'terlambat' => $this->input->post('atelat')
			// ];

			$ePeriod = $this->input->post('end_periode');
			$sPeriod = $this->input->post('start_periode');

			$date1 = date_create($ePeriod);
			$date2 = date_create($sPeriod);

			$dif = date_diff($date1,$date2);
			$interv = $dif->format('%a');
			echo $interv;
			
		}//end else
	}
}
