<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_weblen2 extends CI_Model {

	public function addEval ($data)
	{
		# code...
		$this->db->insert('evaluasi', $data);
		return;
	}

	public function read_hasil_evaluasi ()
	{
		$this->db->select('karyawan.id_karyawan as id_karyawan, karyawan.nama as nama, karyawan.nik as nik, evaluasi.nilai_kinerja as nilai_kinerja, absensi.nilai_produktivitas as nilai_produktivitas, karyawan.nilai_hasil as nilai_hasil');
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
}