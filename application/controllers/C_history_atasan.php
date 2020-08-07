<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_history_atasan extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_weblen2');
    }
    
    public function index(){

        //get all data karyawan which id_evaluasi = not null
        $nik = $this->session->userdata('sessAtasan')['nik_atasan'];
        $data['listEmp'] = $this->M_weblen2->getDatKar3($nik);
        $this->load->view('atasan/V_history_atasan',$data);
    }
}