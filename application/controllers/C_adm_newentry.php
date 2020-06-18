<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_adm_newentry extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen');
	}
	
	public function index(){

		$this->load->view('navbar');
		$this->load->view('admin/tambah_admin');
	}

	public function ttl_per($end, $start){ //fungsi mencari selisih dari range tanggal tertentu
		$date1 = date_create($end);
		$date2 = date_create($start);

		$dif = date_diff($date1,$date2);
		$interv = $dif->format('%a');
		return $interv;
	}

	public function convert_poin_absen($point, $durasi) // mengubah point2 absensi kedalam bentuk persen %
	{
		$x = ($point / $durasi)*100;

		return round($x, 1);
	}

	public function ttlProductvt($s, $i, $a, $t) //fungsi menghitung produktivitas kehadiran
	{
		$x = 100 - ($s+$i+$a+$t);
		return round($x, 0, PHP_ROUND_HALF_DOWN);
	}
	
	public function ttlAbsensi($prod) //total nilai absensi = 30% x nilai produktivitas
	{
		$x = (30 * $prod)/100;
		return round($x, 0, PHP_ROUND_HALF_DOWN);
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
		
		} //end if

		else {

			//hitung periode total
			// $ePeriod = $this->input->post('end_periode');
			// $sPeriod = $this->input->post('start_periode');
			//$this->ttl_per($ePeriod,$sPeriod);
			$ttl_hari = $this->input->post('ttl_hari');
			
			//konversi point absensi ke dalam bentuk persen%
			$sakit = $this->convert_poin_absen($this->input->post('sakit'),$ttl_hari);
			$izin = $this->convert_poin_absen($this->input->post('izin'),$ttl_hari);
			$alpa = $this->convert_poin_absen($this->input->post('alpa')*2,$ttl_hari);
			$telat = $this->convert_poin_absen($this->input->post('atelat'),$ttl_hari);

			//ttl_hari bukan dari selisih tanggal:)
			$prod = $this->ttlProductvt($sakit,$izin,$alpa,$telat); //total nilai produktivitas
			$abs = $this->ttlAbsensi($prod);//total nilai absensi, 30% x nilai produktivitas


			
			//save data absen
			$data_abs = [
				'nik' => $this->input->post('nik'),
				'sakit' => $sakit,
				'izin' => $izin,
				'alpa' => $alpa,
				'terlambat' => $telat,
				'periode' => $ttl_hari,
				'nilai_absen' => $abs,
				'nilai_produktivitas' => $prod
			];
			$this->M_weblen->addAbesen($data_abs); 

			$Absen = $this->M_weblen->getIdAbsen($data_abs['nik']);
			
			
			$idAbsen = $Absen['id_absensi']; //get id absensi
			//save data karyawan
			$data_kar = [
				'id_evaluasi' => null,
				'id_absensi' => $idAbsen,
				'nama' => $this->input->post('nama'),
				'nik' => $this->input->post('nik'),
				'divisi' => $this->input->post('divisi'),
				'bagian' => $this->input->post('bagian'),
				'jabatan' => $this->input->post('jabatan'),
				'start_periode' => $this->input->post('start_periode'),
				'end_periode' => $this->input->post('end_periode'),
				'kontrak_panjang' => "-",
				'kontrak_putus' => "-",
				'anggaran' => "-",
				'kode_pagu' => "-"
			];
			$this->M_weblen->addKaryawan($data_kar);
			$this->session->set_flashdata('saveEmp', '<div class="alert alert-success" role="alert">
			Data saved!</div>');
			redirect('C_adm_newentry');




			
		}//end else
	}
}
