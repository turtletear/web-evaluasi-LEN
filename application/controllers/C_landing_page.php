<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('M_weblen2');
	}

	public function index()
	{
		$data = array();

		$this->load->view('V_landing_page');
	}

	public function check()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('V_landing_page');
        }
        else {
        	$data = array();
			$data['username'] = $this->input->post('username');
			$check = $this->M_weblen2->Sign_In($data);
			if ($check == TRUE) {
				$data['password'] = md5($this->input->post('password'));
				$check = $this->M_weblen2->Sign_In($data);
				if ($check == TRUE) {
					$data = array();
					$data['username'] = $check->username;
					$this->session->set_userdata('userAdmin', $data);
					redirect(site_url('C_dashboard_admin'));
				} else {
					$this->session->set_flashdata('Failed', 'Incorrect Password');
				}
			} else {
				$this->session->set_flashdata('Failed', 'Username not found');
			}
			redirect(site_url('C_landing_page'));
        }		
	}

	public function add() 
	{
		$this->form_validation->set_rules('nama_atasan', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('nik_atasan', 'NIK', 'required|trim'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('V_landing_page');
        }
        else{
        $sess_data = array(
	            'nama_atasan' => $this->input->post('nama_atasan'),
	            'nik_atasan' => $this->input->post('nik_atasan')                      
	        );
	        $this->session->set_userdata('sessAtasan',$sess_data);
	        redirect(site_url('C_dashboard_atasan'));	
        }
	}
}