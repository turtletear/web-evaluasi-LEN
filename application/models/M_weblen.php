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
    
    public function addEval($data)
    {
        $this->db->insert('evaluasi',$data);
    }

    public function getIdEval($nik) //get id eval by nik
    {
        $this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->where('nik',$nik);
        $query = $this->db->get();
        return $query->row_array();
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
    public function getDataAbs($id_abs) //get single data absensi by Id absensi
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('id_absensi',$id_abs);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function updateKar($nik,$id_evl,$res) //update id_evl di tabel karyawan
    {
        $this->db->where('nik',$nik);
        $this->db->set('id_evaluasi',$id_evl);
        $this->db->set('nilai_hasil',$res);
        $this->db->update('karyawan');
    }
}