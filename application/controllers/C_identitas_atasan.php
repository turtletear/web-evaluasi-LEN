<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_identitas_atasan extends CI_Controller {

	public function index()
	{
		$data = array();

		$this->load->view('atasan/V_identitas_atasan');
	}

	public function add() 
	{
		$data = array();
		$data['nama_atasan'] = $this->input->post('nama_atasan');
		$data['nik_atasan'] = $this->input->post('nik_atasan');
		$this->M_weblen2->addEval($data);

		redirect(site_url('C_dashboard_atasan'));
	}

}