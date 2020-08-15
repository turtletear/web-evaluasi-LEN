<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sign_up_admUnit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_weblen');
	}
	
	public function index()
	{
		$this->load->view('admin/V_sign_up_admUnit');
	}

	public function add()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[admin_uk.nik]',[
			'is_unique' => 'NIK is already registered!'
		]);
		$this->form_validation->set_rules('name', 'full name', 'required|trim');
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');
		$this->form_validation->set_rules('bagian', 'Bagian', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');		
		$this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|trim|matches[password]'); 

		if($this->form_validation->run() == false) {            
			$this->load->view('admin/V_sign_up_admUnit');
        }
        else {
			$data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('name');
			$data['id_divisi'] = $this->input->post('divisi');
			$data['id_bagian'] = $this->input->post('bagian');
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			
			$this->M_weblen->regisAdmUK($data);
			$this->session->set_flashdata('reg_admu_succ', '<div class="alert alert-success mt-2" role="alert">
			Registration success!</div>');
			redirect('C_sign_up_admUnit');
        }		
	}//end func
}