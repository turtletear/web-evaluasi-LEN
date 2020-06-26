<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing_page extends CI_Controller {

	public function index()
	{
		$data = array();

		$this->load->view('V_landing_page');
	}

	public function check()
	{
		$pass = "adminhehe";
		$passw = $this->input->post('password');

		if ($passw === $pass)
		{
			
			redirect(site_url('C_dashboard_admin'));
		}
		else {
			
			$this->session->set_flashdata('Failed', 'Invalid password');
			redirect(site_url('C_landing_page'));
		}
	}
}