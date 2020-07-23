<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nilai_atasan extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen');
    }
    
    public function index($id_emp){

        $data = array();
        $data['karyawan'] = $this->M_weblen2->getDataKar($id_emp); //get data karyawan
        $data['absensi'] = $this->newDataAbs($data['karyawan']['id_absensi']);
		$this->load->view('atasan/V_nilai_atasan',$data);
    }

    public function convPoint($point){
        if ($point == 5) {
            $x = 6.7;
        }
        elseif ($point == 4){
            $x = 5.3;
        }
        elseif ($point == 3){
            $x = 4.0;
        }
        elseif ($point == 2){
            $x = 2.7;
        }
        elseif ($point == 1){
            $x = 1.3;
        }
        return round($x, 2);
    }//end func

    public function ttlEval($kin)  //nilai 30 %
    {
        $x = ($kin*70)/100;
        return round($x, 0, PHP_ROUND_HALF_DOWN);
    }//end func

    public function finalResult($abs, $eval){
        return $abs + $eval;
    }
    
    public function convertAbs($point, $durasi) // mengubah persen% absensi kedalam bentuk point2
    {
        $x = ($point * $durasi) / 100 ;

        return round($x);
    }
    
    public function newDataAbs($id)
    {
        $abs = array();
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

    public function addPenilaian($id_emp) //kasih parameter
    {
        //id karyawan dapat dari flashdata
        var_dump($id_emp);
        $dataEmp = $this->M_weblen->getDataKar($id_emp); //get data karyawan
        $name = "Muten Roshi";  //dari flashdata / session
        $nikA = 1201164155;


        $this->form_validation->set_rules('inisiatif', 'Inisiatif', 'required|trim');
        $this->form_validation->set_rules('kreatif', 'Kreatif', 'required|trim');
        $this->form_validation->set_rules('probsolv', 'Problem Solving', 'required|trim');
        $this->form_validation->set_rules('tjawab', 'Tanggung Jawab', 'required|trim');
        $this->form_validation->set_rules('komitmen', 'Komitmen', 'required|trim');
        $this->form_validation->set_rules('etika', 'Etika Kerja', 'required|trim');
        $this->form_validation->set_rules('adaptasi', 'Adaptasi Kerja', 'required|trim');
        $this->form_validation->set_rules('pelayanan', 'Pelayanan', 'required|trim');
        $this->form_validation->set_rules('ktugas', 'Kemampuan Tugas', 'required|trim');
        $this->form_validation->set_rules('penyesuaian', 'Penyesuaian Diri', 'required|trim');
        $this->form_validation->set_rules('komunikasi', 'Komunikasi', 'required|trim');
        $this->form_validation->set_rules('kerjasama', 'Kerja Sama', 'required|trim');
        $this->form_validation->set_rules('disiplin', 'Disiplin', 'required|trim');
        $this->form_validation->set_rules('skerja', 'Sistematika', 'required|trim');
        $this->form_validation->set_rules('hkerja', 'Hasil Pekerjaan', 'required|trim');

        if($this->form_validation->run() == false){

			$this->load->view('atasan/V_nilai_atasan', $dataEmp);
		
        } //end if

        else{

            $dataAbs = $this->M_weblen->getDataAbs($dataEmp['id_absensi']); //get data absensi
            
            $aa = $this->input->post('inisiatif');
            $bb = $this->input->post('kreatif');
            $cc = $this->input->post('probsolv');
            $dd = $this->input->post('tjawab');
            $ee = $this->input->post('komitmen');
            $ff = $this->input->post('etika');
            $gg = $this->input->post('adaptasi');
            $hh = $this->input->post('pelayanan');
            $ii = $this->input->post('ktugas');
            $jj = $this->input->post('penyesuaian');
            $kk = $this->input->post('komunikasi');
            $ll = $this->input->post('kerjasama');
            $mm = $this->input->post('disiplin');
            $nn = $this->input->post('skerja');
            $oo = $this->input->post('hkerja');


            $kinerja = $this->convPoint($aa)+$this->convPoint($bb)+$this->convPoint($cc)+$this->convPoint($dd)+
            $this->convPoint($ee)+$this->convPoint($ff)+$this->convPoint($gg)+$this->convPoint($hh)+$this->convPoint($ii)+
            $this->convPoint($jj)+$this->convPoint($kk)+$this->convPoint($ll)+
            $this->convPoint($mm)+$this->convPoint($nn)+$this->convPoint($oo) ;
            $evl = $this->ttlEval($kinerja);
            $now = date("Y-m-d");
            $dataEvl = [
                'nik' => $dataEmp['nik'],
                'date_fill' => $now,
                'inisiatif' => $this->convPoint($aa),
                'daya_kreatif' => $this->convPoint($bb),
                'prob_solve' => $this->convPoint($cc),
                'tang_jawab' => $this->convPoint($dd),
                'kom_per' => $this->convPoint($ee),
                'etika_kerja' => $this->convPoint($ff),
                'adap_kerja' => $this->convPoint($gg),
                'pelayanan' => $this->convPoint($hh),
                'kem_tugas' => $this->convPoint($ii),
                'pen_diri' => $this->convPoint($jj),
                'kem_komunikasi' => $this->convPoint($kk),
                'ker_sama' => $this->convPoint($ll),
                'disiplin' => $this->convPoint($mm),
                'sis_kerja' => $this->convPoint($nn),
                'has_kerja' => $this->convPoint($oo),
                'nilai_eval' => $evl,
                'nilai_kinerja' => round($kinerja, 0, PHP_ROUND_HALF_DOWN)
            ];

            $res = $this->finalResult($dataAbs['nilai_absen'], $dataEvl['nilai_eval']); //total nilai penilaian keseluruhan
            $this->M_weblen->updateEvl($dataEvl); //save to table evaluasi
            $idEvl = $this->M_weblen->getIdEval($dataEvl['nik'])['id_evaluasi']; //perlu perbaikan
            $this->M_weblen->updateKar($dataEvl['nik'],$idEvl,$res);
            
            $this->session->set_flashdata('evalAt', '<div class="alert alert-success" role="alert">
			Data saved!</div>');
            redirect('C_dashboard_atasan'); 



            //echo $dataAbs['nilai_absen']," + ",$dataEvl['nilai_eval']," nilai eval = ",$res;
            
        }// end else
    }
	

}