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

    public function getDatKar2() //get data for dashboard atasan
    {
        $this->db->select('karyawan.id_karyawan,karyawan.nama,karyawan.nik,absensi.nilai_absen');
        $this->db->from('karyawan');  //karyawan join absensi  
        $this->db->join('absensi','karyawan.id_absensi = absensi.id_absensi');
        $this->db->join('evaluasi','karyawan.id_evaluasi = evaluasi.id_evaluasi');
        $this->db->where('evaluasi.nilai_eval',-1);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function updateEvl($data)
    {
        $this->db->where('nik',$data['nik']);
        $this->db->set('date_fill',$data['date_fill']);
        $this->db->set('inisiatif',$data['inisiatif']);
        $this->db->set('daya_kreatif',$data['daya_kreatif']);
        $this->db->set('prob_solve',$data['prob_solve']);

        $this->db->set('tang_jawab',$data['tang_jawab']);
        $this->db->set('kom_per',$data['kom_per']);
        $this->db->set('etika_kerja',$data['etika_kerja']);
        
        $this->db->set('adap_kerja',$data['adap_kerja']);
        $this->db->set('pelayanan',$data['pelayanan']);
        $this->db->set('kem_tugas',$data['kem_tugas']);
        
        $this->db->set('pen_diri',$data['pen_diri']);
        $this->db->set('kem_komunikasi',$data['kem_komunikasi']);
        $this->db->set('ker_sama',$data['ker_sama']);
        
        $this->db->set('disiplin',$data['disiplin']);
        $this->db->set('sis_kerja',$data['sis_kerja']);
        $this->db->set('has_kerja',$data['has_kerja']);
        
        $this->db->set('nilai_eval',$data['nilai_eval']);
        $this->db->set('nilai_kinerja',$data['nilai_kinerja']);

        $this->db->update('evaluasi');
    }

    public function getAlldata() //for report
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('absensi','karyawan.id_absensi = absensi.id_absensi');
        $this->db->join('evaluasi','karyawan.id_evaluasi = evaluasi.id_evaluasi');
        $this->db->order_by("evaluasi.date_fill", "asc");

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getAllCompletedData() //for report
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('absensi','karyawan.id_absensi = absensi.id_absensi');
        $this->db->join('evaluasi','karyawan.id_evaluasi = evaluasi.id_evaluasi');
        $this->db->where('karyawan.status','Diputus');
        $this->db->or_where('karyawan.kode_pagu !=','-');
        $this->db->order_by("evaluasi.date_fill", "asc");

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getAllDataBetweenDate($ds, $de) //for report
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('absensi','karyawan.id_absensi = absensi.id_absensi');
        $this->db->join('evaluasi','karyawan.id_evaluasi = evaluasi.id_evaluasi');
        $this->db->where('evaluasi.date_fill >=',$ds);
        $this->db->where('evaluasi.date_fill <=',$de);
        $this->db->order_by("evaluasi.date_fill", "asc");

        $query = $this->db->get();
        return $query->result_array();
    }

    public function regisAtasan($data)
    {
        $this->db->insert('atasan',$data);
    }
    
    public function regisAdmUK($data)
    {
        $this->db->insert('admin_uk',$data);
    }

    public function getAtasan()
    {
        $this->db->select('*');
        $this->db->from('atasan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataAtasan($id) //get single data atasan by id
    {
        $this->db->select('atasan.id_atasan, atasan.nik, atasan.nama, atasan.id_divisi, atasan.id_bagian, divisi.nama_divisi, bagian.nama_bagian, bagian.status');
        $this->db->where('id_atasan', $id);
        $this->db->from('atasan');
        $this->db->join('divisi','atasan.id_divisi = divisi.id_divisi');
        $this->db->join('bagian','atasan.id_bagian = bagian.id_bagian');

        $query = $this->db->get();
        return $query->row_array();
    }

    public function getAtasanDetail($id)  //get singel data atasan by id join divisi & bagian
    {
        $this->db->select('atasan.id_atasan, atasan.nik, atasan.nama, atasan.id_divisi, atasan.id_bagian, divisi.nama_divisi, bagian.nama_bagian, bagian.status');
        $this->db->where('id_atasan', $id);
        $this->db->from('atasan');
        $this->db->join('divisi','atasan.id_divisi = divisi.id_divisi');
        $this->db->join('bagian','atasan.id_bagian = bagian.id_bagian');

        $query = $this->db->get();
        return $query->result();
    }
    
    public function getDataAtasanNIK($nik) //get single data atasan w/ id
    {
        $this->db->select('*');
        $this->db->where('nik', $nik);
        $this->db->from('atasan');

        $query = $this->db->get();
        return $query->row_array();
    }

    public function updateStat($id, $dataStat, $now) //untuk karyawan
    {
        $this->db->where('id_karyawan', $id);
        $this->db->set('status', $dataStat['status']);
        $this->db->set('alasan', $dataStat['alasan']);
        $this->db->set('anggaran', $dataStat['j_pagu']);

        if ($dataStat['status'] == "Diputus") {
            $this->db->set('date_fill_uk', $now);
        }
        $this->db->update('karyawan');
        
    }
    public function updateStat2($id, $kpagu) //untuk karyawan
    {
        $this->db->where('id_karyawan', $id);
        $this->db->set('kode_pagu', $kpagu);
        $this->db->update('karyawan');

    }

    public function getAllDivisi()
    {
        $this->db->select('*');
        $this->db->from('divisi');

        $query = $this->db->get();
        return $query->result();
    }

    public function geetDivisibyId($id)
    {
        $this->db->select('*');
        $this->db->from('divisi');
        $this->db->where('id_divisi', $id);
        
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getBagian($id) //get data bagian berdasarkan divisi tertentu dgn status = 1
    {
        $this->db->select('*');
        $this->db->from('bagian');
        $this->db->where('id_divisi', $id);
        $this->db->where('status', 1);


        $query = $this->db->get();
        return $query->result();
    }

    public function getAllBagianbyIdDivisi($id) //get data bagian berdasarkan divisi tertentu 
    {
        $this->db->select('*');
        $this->db->from('bagian');
        $this->db->where('id_divisi', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function updateSB($idDiv, $idBag, $value)  //update status bagian, 0->1 / 1->0
    {
        $this->db->set('status', $value);
        $this->db->where('id_divisi', $idDiv);
        $this->db->where('id_bagian', $idBag);
        $this->db->update('bagian');
    }

    public function findAdmUK($id_div, $id_bag) //find adminUK w/ id_divisi & id_bagian
    {
        $this->db->select('id_admin_uk, nik, nama');
        $this->db->where('id_divisi', $id_div);
        $this->db->where('id_bagian', $id_bag);
        $this->db->from('admin_uk');

        $query = $this->db->get();
        return $query->row_array();
    }
    public function findAdmUK_json($id_div, $id_bag) //find adminUK w/ id_divisi & id_bagian to json
    {
        $this->db->select('id_admin_uk, nik, nama');
        $this->db->where('id_divisi', $id_div);
        $this->db->where('id_bagian', $id_bag);
        $this->db->from('admin_uk');

        $query = $this->db->get();
        return $query->row();
    }

    public function findAtasan($id_bag) //find atasan w/ id_divisi & id_bagian
    {
        $this->db->select('id_atasan, nik, nama');
        $this->db->where('id_bagian', $id_bag);
        $this->db->from('atasan');

        $query = $this->db->get();
        return $query->row_array();
    }
}