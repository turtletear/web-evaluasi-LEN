<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_landing_page extends CI_Controller {

	public function index()
	{
		$data = array();

		$this->load->view('V_landing_page');
	}

}