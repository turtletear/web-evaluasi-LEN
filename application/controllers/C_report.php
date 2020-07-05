<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class C_report extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('M_weblen');
    }
    
    public function index(){
      $data = $this->M_weblen->getAlldata();
      
      $datConv['allDat'] = $this->convertAllData($data);
      $this->load->view('admin/V_report',$datConv);
    }

    public function convertAllData($data) //convert semua data
    {
      $i = 0;
      $conv;
      foreach ($data as $x){
        $conv[$i] =  $this->convertData($x);
        $i++;
      }
      return $conv;
    }

    public function convertData($data)
    {
      $dataconv = $data;
      $dataconv['inisiatif'] = $this->convertEval($data['inisiatif']);
      $dataconv['daya_kreatif'] = $this->convertEval($data['daya_kreatif']);
      $dataconv['prob_solve'] = $this->convertEval($data['prob_solve']);
      
      $dataconv['tang_jawab'] = $this->convertEval($data['tang_jawab']);
      $dataconv['kom_per'] = $this->convertEval($data['kom_per']);
      $dataconv['etika_kerja'] = $this->convertEval($data['etika_kerja']);

      $dataconv['adap_kerja'] = $this->convertEval($data['adap_kerja']);
      $dataconv['pelayanan'] = $this->convertEval($data['pelayanan']);
      $dataconv['kem_tugas'] = $this->convertEval($data['kem_tugas']);

      $dataconv['pen_diri'] = $this->convertEval($data['pen_diri']);
      $dataconv['kem_komunikasi'] = $this->convertEval($data['kem_komunikasi']);
      $dataconv['ker_sama'] = $this->convertEval($data['ker_sama']);

      $dataconv['disiplin'] = $this->convertEval($data['disiplin']);
      $dataconv['sis_kerja'] = $this->convertEval($data['sis_kerja']);
      $dataconv['has_kerja'] = $this->convertEval($data['has_kerja']);

      $dataconv['sakit'] = $this->convertAbs($data['sakit'], $data['periode']);
      $dataconv['izin'] = $this->convertAbs($data['izin'], $data['periode']);
      $dataconv['alpa'] = $this->convertAbs($data['alpa']/2, $data['periode']);
      $dataconv['terlambat'] = $this->convertAbs($data['terlambat'], $data['periode']);
      
      if ($dataconv['nilai_eval']==-1) {
        $dataconv['nilai_eval'] = '-';
        $dataconv['nilai_kinerja'] = '-';
      }

      return $dataconv;
    }

    public function convertEval ($point)
    {
      if ($point == 6.7) {
              $x = '5 (Sangat Baik)' ;
          }
          elseif ($point == 5.3){
              $x = '4 (Baik)';
          }
          elseif ($point == 4.0){
              $x = '3 (Cukup)';
          }
          elseif ($point == 2.7){
              $x = '2 (Kurang)';
          }
          elseif ($point == 1.3){
              $x = '1 (Sangat Kurang';
          }
          else{
              $x = '-';
          }
          return $x;
    }

    public function convertAbs($point, $durasi) // mengubah % absensi kedalam bentuk point2
    {
      $x = ($point * $durasi) / 100 ;

      return round($x,1);
    }

    public function printFunc()
    { 
      $spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
      
      $styleArray = [
          'borders' => [
              'allBorders' => [
                  'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
              ],
          ],
      ];
      $sheet->getStyle('A2:AH2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
      $sheet->getStyle('A2:AH2')->getFill()->getStartColor()->setARGB('d0cece');
      
      $cell_width = 17;
      foreach(range('B','Z') as $columnID) {
        $sheet->getColumnDimension($columnID)->setWidth($cell_width);
      }
      $sheet->getColumnDimension('A')->setWidth(5);
      $sheet->getColumnDimension('AA')->setWidth($cell_width);
      $sheet->getColumnDimension('AB')->setWidth($cell_width);
      $sheet->getColumnDimension('AC')->setWidth($cell_width);
      $sheet->getColumnDimension('AD')->setWidth($cell_width);
      $sheet->getColumnDimension('AE')->setWidth($cell_width);
      $sheet->getColumnDimension('AF')->setWidth($cell_width);
      $sheet->getColumnDimension('AG')->setWidth($cell_width);
      $sheet->getColumnDimension('AH')->setWidth($cell_width);
      
      $sheet->getStyle('J1:X1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
      $sheet->getStyle('J1:X1')->getFill()->getStartColor()->setARGB('729fcf');
      $sheet->getStyle('J1:X1')->applyFromArray($styleArray);
      $sheet->getStyle('J1:X1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

      $sheet->setCellValue('J1', 'Innovation');
      $sheet->mergeCells('J1:L1');
      
      $sheet->setCellValue('M1', 'Integrity');
      $sheet->mergeCells('M1:O1');
      
      $sheet->setCellValue('P1', 'Customer Oriented');
      $sheet->mergeCells('P1:R1');
      
      $sheet->setCellValue('S1', 'Team Work');
      $sheet->mergeCells('S1:U1');
      
      $sheet->setCellValue('V1', 'Professionalism');
      $sheet->mergeCells('V1:X1');
      
      $sheet->setCellValue('A2', 'No');
			$sheet->setCellValue('B2', 'Tanggal Terima Form');
      $sheet->setCellValue('C2', 'NIK PKWT');
			$sheet->setCellValue('D2', 'Nama');
			$sheet->setCellValue('E2', 'Divisi/Unit Bisnis');
			$sheet->setCellValue('F2', 'Unit Kerja/Bagian');
			$sheet->setCellValue('G2', 'Jabatan');
			$sheet->setCellValue('H2', 'Periode Kontrak (Awal)');
      $sheet->setCellValue('I2', 'Periode Kontrak (Akhir)');
      
			$sheet->setCellValue('J2', 'Inisiatif');
			$sheet->setCellValue('K2', 'Daya Kreativitas');
			$sheet->setCellValue('L2', 'Problem Solving');
      
			$sheet->setCellValue('M2', 'Tanggung Jawab');
			$sheet->setCellValue('N2', 'Komitmen Kepada Perusahaan');
			$sheet->setCellValue('O2', 'Etika Kerja');
      
			$sheet->setCellValue('P2', 'Adaptasi Kerja');
			$sheet->setCellValue('Q2', 'Pelayanan Terhadap Unit Kerja/Pihak Eksternal');
			$sheet->setCellValue('R2', 'Kemampuan Melaksanakan Tugas');
      
			$sheet->setCellValue('S2', 'Penyesuaian Diri');
			$sheet->setCellValue('T2', 'Kemampuan Berkomunikasi');
			$sheet->setCellValue('U2', 'Kerja Sama');
      
			$sheet->setCellValue('V2', 'Disiplin');
			$sheet->setCellValue('W2', 'Sistematika Kerja');
      $sheet->setCellValue('X2', 'Hasil Pekerjaan');
      $sheet->setCellValue('Y2', 'Penilaian Kinerja');
      $sheet->setCellValue('Z2', 'Hasil Evaluasi');

      $sheet->setCellValue('AA2', 'Hari Kerja(Durasi Kontrak)');
      $sheet->setCellValue('AB2', 'Sakit');
      $sheet->setCellValue('AC2', 'Izin');
      $sheet->setCellValue('AD2', 'Alpa');
      $sheet->setCellValue('AE2', 'Absen Terlambat(1 Hari = 8 Jam)');
      $sheet->setCellValue('AF2', 'Produktivitas Kehadiran');
      $sheet->setCellValue('AG2', 'Absensi');
      $sheet->setCellValue('AH2', 'Hasil Evaluasi Penilaian');
      
      $data = $this->M_weblen->getAlldata();
      $datConv = $this->convertAllData($data);
			
			$no = 1;
			$x = 3;
			foreach($datConv as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row['date_fill']);
				$sheet->setCellValue('C'.$x, $row['nik']);
				$sheet->setCellValue('D'.$x, $row['nama']);
				$sheet->setCellValue('E'.$x, $row['divisi']);
				$sheet->setCellValue('F'.$x, $row['bagian']);
				$sheet->setCellValue('G'.$x, $row['jabatan']);
				$sheet->setCellValue('H'.$x, $row['start_periode']);
        $sheet->setCellValue('I'.$x, $row['end_periode']);
        
				$sheet->setCellValue('J'.$x, $row['inisiatif']);
				$sheet->setCellValue('K'.$x, $row['daya_kreatif']);
				$sheet->setCellValue('L'.$x, $row['prob_solve']);
        
				$sheet->setCellValue('M'.$x, $row['tang_jawab']);
				$sheet->setCellValue('N'.$x, $row['kom_per']);
				$sheet->setCellValue('O'.$x, $row['etika_kerja']);
        
				$sheet->setCellValue('P'.$x, $row['adap_kerja']);
				$sheet->setCellValue('Q'.$x, $row['pelayanan']);
				$sheet->setCellValue('R'.$x, $row['kem_tugas']);
        
				$sheet->setCellValue('S'.$x, $row['pen_diri']);
				$sheet->setCellValue('T'.$x, $row['kem_komunikasi']);
				$sheet->setCellValue('U'.$x, $row['ker_sama']);
        
				$sheet->setCellValue('V'.$x, $row['disiplin']);
				$sheet->setCellValue('W'.$x, $row['sis_kerja']);
				$sheet->setCellValue('X'.$x, $row['has_kerja']);
				$sheet->setCellValue('Y'.$x, $row['nilai_eval']);
        $sheet->setCellValue('Z'.$x, $row['nilai_kinerja']);
        
        $sheet->setCellValue('AA'.$x, $row['periode']);
        $sheet->setCellValue('AB'.$x, $row['sakit']);
        $sheet->setCellValue('AC'.$x, $row['izin']);
        $sheet->setCellValue('AD'.$x, $row['alpa']);
        $sheet->setCellValue('AE'.$x, $row['terlambat']);
        $sheet->setCellValue('AF'.$x, $row['nilai_produktivitas']);
        $sheet->setCellValue('AG'.$x, $row['nilai_absen']);
        $sheet->setCellValue('AH'.$x, $row['nilai_hasil']);

				$x++;
      }
      
      $sheet->getStyle('A2:AH'.($x-1))->applyFromArray($styleArray);


			$writer = new Xlsx($spreadsheet);
			$filename = 'report-pkwt';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');


    }
}// end