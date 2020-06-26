<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard_atasan extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_weblen2');
    }
    
    public function index(){

        //get all data karyawan which id_evaluasi = null
        $data['listEmp'] = $this->M_weblen2->getDatKar2();
        $this->load->view('atasan/V_dashboard_atasan',$data);
    }
}