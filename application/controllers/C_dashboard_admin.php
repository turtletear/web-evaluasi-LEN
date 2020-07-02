<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard_admin extends CI_Controller {

	public function index()
	{
		$data = array();		
		$data['hasilevaluasi'] = $this->M_weblen2->read_hasil_evaluasi();
		// var_dump($data['hasilevaluasi'][3]);
		$this->load->view('admin/V_dashboard_admin', $data);

	}

}