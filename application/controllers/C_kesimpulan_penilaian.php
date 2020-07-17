<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kesimpulan_penilaian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_weblen2');
	}

	public function index($id)
	{
		$data = array();
		$data['karyawan'] = $this->M_weblen2->getDataKar($id);
		$data['evaluasi'] = $this->newDataEval($data['karyawan']['id_evaluasi']);
		$data['absensi'] = $this->newDataAbs($data['karyawan']['id_absensi']);
		$this->load->view('admin/V_kesimpulan_penilaian',$data);
	}

	public function convertEval ($point)
	{
		if ($point == 6.7) {
            $x = '5 (Sangat Baik)' ;
        }
        elseif ($point == 5.3){
            $x = '4 (Baik)';
        }
        elseif ($point == 4.0){
            $x = '3 (Cukup)';
        }
        elseif ($point == 2.7){
            $x = '2 (Kurang)';
        }
        elseif ($point == 1.3){
            $x = '1 (Sangat Kurang';
        }
        return $x;
	}

	public function newDataEval ($id) //taroh $id di parameter
	{	
		//$eval = array();
		$eval = $this->M_weblen2->getDataEval($id);
		$dataEval = [
			'id_evaluasi' => $eval['id_evaluasi'],
			'nik' => $eval['nik'],
            'date_fill' => $eval['date_fill'],
            'inisiatif' => $this->convertEval($eval['inisiatif']),
            'daya_kreatif' => $this->convertEval($eval['daya_kreatif']),
            'prob_solve' => $this->convertEval($eval['prob_solve']),
            'tang_jawab' => $this->convertEval($eval['tang_jawab']),
            'kom_per' => $this->convertEval($eval['kom_per']),
            'etika_kerja' => $this->convertEval($eval['etika_kerja']),
            'adap_kerja' => $this->convertEval($eval['adap_kerja']),
            'pelayanan' => $this->convertEval($eval['pelayanan']),
            'kem_tugas' => $this->convertEval($eval['kem_tugas']),
            'pen_diri' => $this->convertEval($eval['pen_diri']),
            'kem_komunikasi' => $this->convertEval($eval['kem_komunikasi']),
            'ker_sama' => $this->convertEval($eval['ker_sama']),
            'disiplin' => $this->convertEval($eval['disiplin']),
            'sis_kerja' => $this->convertEval($eval['sis_kerja']),
            'has_kerja' => $this->convertEval($eval['has_kerja']),
            'nilai_eval' => $eval['nilai_eval'],
            'nilai_kinerja' => $eval['nilai_kinerja'],
            'nama_atasan' => $eval['nama_atasan'],
            'nik_atasan' => $eval['nik_atasan']
        ];
        return $dataEval;
	}

	public function convertAbs($point, $durasi) // mengubah % absensi kedalam bentuk point2
	{
		$x = ($point * $durasi) / 100 ;

		return round($x);
	}

	public function newDataAbs($id)
	{
		$abs = $this->M_weblen2->getDataAbs($id);
		$dataAbs = [
			'id_absensi' => $abs['id_absensi'],
			'sakit' => $this->convertAbs($abs['sakit'],$abs['periode']),
			'izin'=> $this->convertAbs($abs['izin'],$abs['periode']),
			'alpa' => $this->convertAbs($abs['alpa']/2,$abs['periode']),
			'periode'=> $abs['periode'],
			'terlambat'=> $this->convertAbs($abs['terlambat'],$abs['periode']),
			'nilai_absen' => $abs['nilai_absen'],
			'nilai_produktivitas' => $abs['nilai_produktivitas']
		];
		return $dataAbs;
	}

	public function saveKesimpulan($id)
	{
		// $kpagu = $this->input->post('inp_kpagu');
		// echo $kpagu;
		// die;
		$this->form_validation->set_rules('inp_kpagu', 'Kode pagu', 'required|trim');
		
		if ($this->form_validation->run() == false) {
			$data = array();
			$data['karyawan'] = $this->M_weblen2->getDataKar($id);
			$data['evaluasi'] = $this->newDataEval($data['karyawan']['id_evaluasi']);
			$data['absensi'] = $this->newDataAbs($data['karyawan']['id_absensi']);
			$this->load->view('admin/V_kesimpulan_penilaian',$data);
		}
		else {			
			$kpagu = $this->input->post('inp_kpagu');
			$this->M_weblen2->updateKesimpulan($id,$kpagu);			
			$this->session->set_flashdata('kesimpSuccess', '<div class="alert alert-success" role="alert">
			Data saved!</div>');
			redirect('C_dashboard_admin');
		} //end if
			
			

			
		
	}

}