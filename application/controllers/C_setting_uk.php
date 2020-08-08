<?php

use function GuzzleHttp\json_decode;

defined('BASEPATH') OR exit('No direct script access allowed');

class C_setting_uk extends CI_Controller {
    
  public function __construct(){
    parent::__construct();
      $this->load->model('M_weblen');
    }
    
  public function index(){
    
    $this->load->view('admin/V_setting_uk');
  }

  public function fetchBagian($idDiv){
    $obj = $this->M_weblen->getAllBagianbyIdDivisi($idDiv);
		echo json_encode($obj);
  }

  public function updateBagianStat()
  {
    $idBag = $_POST['id_bagian'];
    $idDiv = $_POST['id_divisi'][0]; //gara2 jadi array setelah get dari variable global _POST
    $val = $_POST['value'];
    if (isset($idBag) && isset($idDiv)) {
      echo "id bagian:" . $idBag . " dari divisi:". $idDiv . " berhasil di update dengan value:". $val;
      $this->M_weblen->updateSB($idDiv, $idBag, $val);
    }
    else{
      echo "data is null!";
    }

    
  }
}// end of class