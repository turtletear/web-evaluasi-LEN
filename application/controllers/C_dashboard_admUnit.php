<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard_admUnit extends CI_Controller {

	public function index()
	{
		$id_bagian = $this->session->userdata('sessAdmUnit')['id_bagian'];
		$data = array();		
		$data['hasilevaluasi'] = $this->M_weblen2->getDataKar4($id_bagian);
		// var_dump($data['hasilevaluasi'][3]);
		$this->load->view('admin/V_dashboard_admUnit', $data);

	}

}