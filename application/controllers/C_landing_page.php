<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_weblen');
	}

	public function index()
	{
		$this->load->view('V_landing_page');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('C_landing_page');
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
		$this->form_validation->set_rules('nik_atasan', 'NIK', 'required|trim'); 
		$this->form_validation->set_rules('pass_atasan', 'Password', 'required|trim');

		if($this->form_validation->run() == false) {            
			$this->load->view('V_landing_page');
        }
        else{
			$this->loginAtasan();
        }
	}

	private function loginAtasan()
	{


		$datAtasan = $this->M_weblen->getDataAtasanNIK($this->input->post('nik_atasan'));

		

		if ($datAtasan) { //terdaftar
			
			$pass = $this->input->post('pass_atasan');
			if (password_verify($pass, $datAtasan['password'])) {
				$sess_data = array(
					'nama_atasan' => $datAtasan['nama'],
					'nik_atasan' =>  $datAtasan['nik']
				);
				$this->session->set_userdata('sessAtasan',$sess_data);
				redirect('C_dashboard_atasan');
			}
			else{
				$this->session->set_flashdata('failed_atasan', '
				<div class="alert alert-danger" role="alert">
					incorrect password!
				</div>');
				redirect('C_landing_page');
			}
		}
		else { //gagal login
			$this->session->set_flashdata('failed_atasan', '
			<div class="alert alert-danger" role="alert">
				Account is not registered, please contact the administrator for registration!
			</div>');
			redirect('C_landing_page');
		}	
	}
}