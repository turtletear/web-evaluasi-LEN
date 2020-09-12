<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tambah_admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen');
	}
	
	public function index(){
		$data['atasan'] = $this->M_weblen->getAtasan();
		$this->load->view('admin/V_tambah_admin', $data);
	}


	public function fetchDivisi()
	{
		$obj = $this->M_weblen->getAllDivisi();
		echo json_encode($obj);
	}


	public function fetchBagian($idDiv)
	{
		$obj = $this->M_weblen->getBagian($idDiv);
		echo json_encode($obj);
	}

	public function fetchBagian2($id) //ambil data atasan bagian tertentu
	{
		$obj = $this->M_weblen->getAtasanDetail($id);
		echo json_encode($obj);
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

	public function divConv($id) //konversi kode divisi
	{
		$data = $this->M_weblen->geetDivisibyId($id);
		if ($data) {
			return $data['nama_divisi'];
		}
		else {
			return "not found!";
		}
	}

	public function newEntry(){

		// $idAt = $this->input->post('combo_atasan');
		// $dataAtasan = $this->M_weblen->getDataAtasan($idAt);
		// var_dump($dataAtasan);
		// die;


		$this->form_validation->set_rules('combo_atasan', 'Atasan', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[8]|max_length[8]|is_unique[karyawan.nik]',[
			'is_unique'=> 'NIK is already registered',
			'min_length' => 'NIK must have 8 digits',
			'max_length' => 'NIK must have 8 digits'
		]); 
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('start_periode', 'Periode mulai', 'required|trim');
		$this->form_validation->set_rules('end_periode', 'Periode akhir', 'required|trim');

		$this->form_validation->set_rules('ttl_hari', 'total hari', 'required|trim',[
			'required' => 'Field required'
		]);
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
			$data['atasan'] = $this->M_weblen->getAtasan();
			$this->load->view('admin/V_tambah_admin', $data);
		
		} //end if

		else {
			$ttl_hari = $this->input->post('ttl_hari');
			
			//konversi point absensi ke dalam bentuk persen%
			$sakit = $this->convert_poin_absen($this->input->post('sakit'),$ttl_hari);
			$izin = $this->convert_poin_absen($this->input->post('izin'),$ttl_hari);
			$alpa = $this->convert_poin_absen($this->input->post('alpa')*2,$ttl_hari);
			$telat = $this->convert_poin_absen($this->input->post('atelat'),$ttl_hari);

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

			//create data evaluasi
			$idAt = $this->input->post('combo_atasan');
			$dataAtasan = $this->M_weblen->getDataAtasan($idAt);
			$dataEvl = [
                'nik' => $this->input->post('nik'),
                'date_fill' => '0000-00-00',
                'inisiatif' => '0',
                'daya_kreatif' => '0',
                'prob_solve' => '0',
                'tang_jawab' => '0',
                'kom_per' => '0',
                'etika_kerja' => '0',
                'adap_kerja' => '0',
                'pelayanan' => '0',
                'kem_tugas' => '0',
                'pen_diri' => '0',
                'kem_komunikasi' => '0',
                'ker_sama' => '0',
                'disiplin' => '0',
                'sis_kerja' => '0',
                'has_kerja' => '0',
                'nilai_eval' => '-1',
                'nilai_kinerja' => '0',
                'nama_atasan' => $dataAtasan['nama'],
                'nik_atasan' => $dataAtasan['nik']
			];

			$this->M_weblen->addEval($dataEvl);
			$idEvl = $this->M_weblen->getIdEval($dataEvl['nik'])['id_evaluasi'];
			
			
			$idAbsen = $Absen['id_absensi']; //get id absensi

			//get data Admin UK
			$admUK = $this->M_weblen->findAdmUK($dataAtasan['id_divisi'], $dataAtasan['id_bagian']);

			//save data karyawan
			$data_kar = [
				'id_evaluasi' => $idEvl,
				'id_absensi' => $idAbsen,
				'id_divisi' =>  $dataAtasan['id_divisi'],
				'id_bagian' => $dataAtasan['id_bagian'],

				'id_admin_uk' => $admUK['id_admin_uk'],

				'nama' => $this->input->post('nama'),
				'nik' => $this->input->post('nik'),

				'divisi' =>  $dataAtasan['nama_divisi'],
				'bagian' => $dataAtasan['nama_bagian'],

				'jabatan' => $this->input->post('jabatan'),
				'start_periode' => $this->input->post('start_periode'),
				'end_periode' => $this->input->post('end_periode'),
				'status' => "-",
				'alasan' => "-",
				'anggaran' => "-",
				'kode_pagu' => "-"
			];

			$this->M_weblen->addKaryawan($data_kar);
			$this->session->set_flashdata('saveEmp', '<div class="alert alert-success" role="alert">
			Data saved!</div>');
			redirect('C_tambah_admin');



			
		}//end else
	}
}
