<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sign_up_admin extends CI_Controller {

	public function index()
	{
		$data = array();

		$this->load->view('admin/V_sign_up_admin');
	}

	public function add()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');		
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('admin/V_sign_up_admin');
        }
        else {
			if ($this->input->post('password') == $this->input->post('confirm_password')) {
			$check = $this->M_weblen2->checkSignUp($this->input->post('username'));
				if ($check == False) {
					$data = array();
					$data['username'] = $this->input->post('username');
					$data['password'] = md5($this->input->post('password'));
					$this->M_weblen2->Sign_Up($data);
					$this->session->set_flashdata('Success', 'Your account has been successfully registered');
				} else {
					$this->session->set_flashdata('Failed', 'Username is already registered');
				}
			} else {
				$this->session->set_flashdata('Failed', 'Password and Confirm password do not match');
			}
		redirect(site_url('C_sign_up_admin'));
        }		
	}
}