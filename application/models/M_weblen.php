<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_weblen extends CI_Model {
    
    public function addAbesen($absen)
    {
        $this->db->insert('absensi',$absen);
    }
    public function addKaryawan($data)
    {
        $this->db->insert('karyawan',$data);
    }

    public function getIdAbsen($nik) //get id absen by nik
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('nik',$nik);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getDataKar($id) //get single data Karyawan by Id karyawan
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('id_karyawan',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
}