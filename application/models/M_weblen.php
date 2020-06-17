<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_weblen extends CI_Model {
    
    public function addAbesen($absen)
    {
        $this->db->insert('absensi',$absen);
    }

}