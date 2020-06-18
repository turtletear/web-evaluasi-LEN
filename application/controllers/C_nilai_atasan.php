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
            echo "anjay mabar";
        }
    }
	

}