<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashbrd_atasan extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_weblen');
    }
    
    public function index(){

        //get all data karyawan which id_evaluasi = null
        $data['listEmp'] = $this->M_weblen->getDatKar2();
        
        $this->load->view('navbar');
		$this->load->view('atasan/dashboard_atasan',$data);
    }
}