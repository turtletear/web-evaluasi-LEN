<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_identitas_atasan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen2');
	}

	public function index()
	{
		$data = array();

		$this->load->view('atasan/V_identitas_atasan');
	}

	public function add() 
	{
		$this->form_validation->set_rules('nama_atasan', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik_atasan', 'NIK', 'required|trim'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('atasan/V_identitas_atasan');
        }

		else {
			$sess_data = array(
				'nama_atasan' => $this->input->post('nama_atasan'),
				'nik_atasan' => $this->input->post('nik_atasan')                      
			);
			$this->session->set_userdata('sessAtasan',$sess_data);
			redirect(site_url('C_dashboard_atasan'));
		}
	}
}