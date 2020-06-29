<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_weblen2 extends CI_Model {

	public function addEval ($data)
	{
		# code...
		$this->db->insert('evaluasi', $data);
		return;
	}

	public function addAbsen($absen)
    {
        $this->db->insert('absensi',$absen);
    }
    
    public function addKaryawan($data)
    {
        $this->db->insert('karyawan',$data);
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

	public function read_hasil_evaluasi () //dashboard admin
	{
        $this->db->select('karyawan.id_karyawan as id_karyawan, karyawan.id_absensi as id_absensi, 
        karyawan.id_evaluasi as id_evaluasi, karyawan.nama as nama, karyawan.nik as nik, 
        evaluasi.nilai_eval as nilai_eval, absensi.nilai_absen as nilai_absen, 
        karyawan.nilai_hasil as nilai_hasil, karyawan.status as status');
		$this->db->from('karyawan');
		$this->db->join('evaluasi', 'karyawan.id_evaluasi = evaluasi.id_evaluasi');
		$this->db->join('absensi', 'karyawan.id_absensi = absensi.id_absensi');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDataKar($id)
	{
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->where('id_karyawan', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function getDataAbs($id)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('id_absensi',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getDataEval($id)
    {
        $this->db->select('*');
        $this->db->from('evaluasi');
        $this->db->where('id_evaluasi',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getDatKar2() //for dashboard atasan
    {
        $this->db->select('karyawan.id_karyawan,karyawan.nama,karyawan.nik,absensi.nilai_absen');
        $this->db->from('karyawan');  //karyawan join absensi  
        $this->db->join('absensi','karyawan.id_absensi = absensi.id_absensi');
        $this->db->where('id_evaluasi',null);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function updateKesimpulan($id,$data)
    {
        $this->db->where('id_karyawan',$id);
        $this->db->set('status',$data['status']);
        $this->db->set('alasan',$data['alasan']);
        $this->db->set('anggaran',$data['anggaran']);
        $this->db->set('kode_pagu',$data['kode_pagu']);

        $this->db->update('karyawan');
    }
}