<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sign_up_atasan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_weblen');
	}
	
	public function index()
	{
		$data = array();

		$this->load->view('atasan/V_sign_up_atasan');
	}

	public function add()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[atasan.nik]');
		$this->form_validation->set_rules('name', 'full name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');		
		$this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|trim|matches[password]'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('atasan/V_sign_up_atasan');
        }
        else {
			$data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('name');
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$this->M_weblen->regisAtasan($data);
			$this->session->set_flashdata('Success', 'Your account has been successfully registered');
		redirect('C_sign_up_atasan');
        }		
	}
}