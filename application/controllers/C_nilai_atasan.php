<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nilai_atasan extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen');
    }
    
    public function index(){

        $id_emp = 11;  //id karyawan dapat dari flashdata
        $dataEmp = $this->M_weblen->getDataKar($id_emp); //get data karyawan
		$this->load->view('navbar');
		$this->load->view('atasan/nilai_atasan',$dataEmp);
    }

    public function convPoint($point)
    {
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

    public function ttlEval($kin)
    {
        $x = ($kin*70)/100;
        return round($x, 0, PHP_ROUND_HALF_DOWN);
    }
    
    public function addPenilaian()
    {
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
            $id_emp = 11;  //id karyawan dapat dari flashdata
            $dataEmp = $this->M_weblen->getDataKar($id_emp); //get data karyawan



            $this->load->view('navbar');
			$this->load->view('atasan/nilai_atasan', $dataEmp);
		
        } //end if
        else{
            $name = "Muten Roshi";  //dari flashdata / session
            $nikA = 1201164155;

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

            // echo 'ini poin inisiatif ',$aa,' dikonversi jadi ',$this->convPoint($aa);
            $kinerja = $this->convPoint($aa)+$this->convPoint($bb)+$this->convPoint($cc)+$this->convPoint($dd)+
            $this->convPoint($ee)+$this->convPoint($ff)+$this->convPoint($gg)+$this->convPoint($hh)+$this->convPoint($ii)+
            $this->convPoint($jj)+$this->convPoint($kk)+$this->convPoint($ll)+
            $this->convPoint($mm)+$this->convPoint($nn)+$this->convPoint($oo) ;
            $evl = $this->ttlEval($kinerja);
            $now = date("Y-m-d");
            $dataEvl = [
                'date_fill' => $now,
                'inisiatif' => $aa,
                'daya_kreatif' => $bb,
                'prob_solve' => $cc,
                'tang_jawab' => $dd,
                'kom_per' => $ee,
                'etika_kerja' => $ff,
                'adap_kerja' => $gg,
                'pelayanan' => $hh,
                'kem_tugas' => $ii,
                'pen_diri' => $jj,
                'kem_komunikasi' => $kk,
                'ker_sama' => $ll,
                'disiplin' => $mm,
                'sis_kerja' => $nn,
                'has_kerja' => $oo,
                'nilai_eval' => $evl,
                'nilai_kinerja' => round($kinerja, 0, PHP_ROUND_HALF_DOWN),
                'nama_atasan' => $name,
                'nik_atasan' => $nikA
            ];

            var_dump($dataEvl);
        }
    }
	

}