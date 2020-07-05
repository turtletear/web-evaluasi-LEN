<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT LEN</title>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">
</head>
<body>
    

        <!-- -----------------------BATAS SUCI----------------------- -->
        <div class="container">
            
            
            <!-- NAVBAR  -->
            <?php $this->load->view('navbar_admin.php') ?>
        

        <div class="row">
            <div class="col-md-12 mt-2 mb-2">
            <a href="<?= site_url('C_report/printFunc')?>"><button type="button" class="btn btn-secondary btn-lg">Print</button></a>  
            </div>
        </div>

        <!-- start main content here..-->
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col" colspan="9"></th>

                        
                        <th class="text-center bg-info" scope="col" colspan="3">Innovation</th>

    
                        <th class="text-center bg-info" scope="col" colspan="3">Integrity</th>
                        
                        <th class="text-center bg-info" scope="col" colspan="3">Customer Oriented</th>

    
                        <th class="text-center bg-info" scope="col" colspan="3">Team Work</th>
                        
                        <th class="text-center bg-info" scope="col" colspan="3">Proffesionalism</th>
                        
                        <th scope="col" colspan="10"></th>

                        
                    </tr>
                </thead>
                <thead class="bg-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal Terima Form</th>
                        <th scope="col">NIK PKWT</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Divisi/Unit Bisnis</th>
                        <th scope="col">Unit Kerja/Bagian</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Periode kontrak (Awal)</th>
                        <th scope="col">Periode kontrak (Akhir)</th>
                        
                        <th scope="col">Inisiatif</th>
                        <th scope="col">Daya Kreativitas</th>
                        <th scope="col">Problem Solving</th>
    
                        <th scope="col">Tanggung Jawab</th>
                        <th scope="col">Komitmen Kepada Perusahaan</th>
                        <th scope="col">Etika Kerja</th>
                        
                        <th scope="col">Adaptasi Kerja</th>
                        <th scope="col">Pelayanan Terhadap Unit Kerja/Pihak Eksternal</th>
                        <th scope="col">Kemampuan Melaksanakan Tugas</th>
    
                        <th scope="col">Penyesuaian Diri</th>
                        <th scope="col">Kemampuan Berkomunikasi</th>
                        <th scope="col">Kerja Sama</th>
                        
                        <th scope="col">Disiplin</th>
                        <th scope="col">Sistematika Kerja</th>
                        <th scope="col">Hasil Pekerjaan</th>
                        
                        <th scope="col">Penilaian Kinerja</th>
                        <th scope="col">Hasil Evaluasi</th>
                        
                        <th scope="col">Hari Kerja (Durasi Kontrak)</th>
                        <th scope="col">Sakit</th>
                        <th scope="col">Izin</th>
                        <th scope="col">Alpa</th>
                        <th scope="col">Absen Terlambat (1 Hari = 8 Jam)</th>
                        <th scope="col">Produktivitas Kehadiran</th>
                        <th scope="col">Absensi</th>
                        <th scope="col">Hasil Evaluasi Penilaian</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $x =  1;
                    foreach($allDat as $data) {?>
                        <tr>
                            <th scope="row"> <?= $x?> </th>
                            <td> <?= $data['date_fill'] ?> </td>
                            <td class="text-center"> <?= $data['nik'] ?> </td>
                            <td> <?= $data['nama'] ?> </td>
                            <td> <?= $data['divisi'] ?> </td>
                            <td> <?= $data['bagian'] ?> </td>
                            <td> <?= $data['jabatan'] ?> </td>
                            <td class="text-center"> <?= $data['start_periode'] ?> </td>
                            <td class="text-center"> <?= $data['end_periode'] ?> </td>
                            <td class="text-center"> <?= $data['inisiatif'] ?> </td>
                            <td class="text-center"> <?= $data['daya_kreatif'] ?> </td>
                            <td class="text-center"> <?= $data['prob_solve'] ?> </td>
                            <td class="text-center"> <?= $data['tang_jawab'] ?> </td>
                            <td class="text-center"> <?= $data['kom_per'] ?> </td>
                            <td class="text-center"> <?= $data['etika_kerja'] ?> </td>
                            <td class="text-center"> <?= $data['adap_kerja'] ?> </td>
                            <td class="text-center"> <?= $data['pelayanan'] ?> </td>
                            <td class="text-center"> <?= $data['kem_tugas'] ?> </td>
                            <td class="text-center"> <?= $data['pen_diri'] ?> </td>
                            <td class="text-center"> <?= $data['kem_komunikasi'] ?> </td>
                            <td class="text-center"> <?= $data['ker_sama'] ?> </td>
                            <td class="text-center"> <?= $data['disiplin'] ?> </td>
                            <td class="text-center"> <?= $data['sis_kerja'] ?> </td>
                            <td class="text-center"> <?= $data['has_kerja'] ?> </td>
                            <td class="text-center"> <?= $data['nilai_kinerja'] ?>% </td>
                            <td class="text-center"> <?= $data['nilai_eval'] ?>% </td>
                            <td class="text-center"> <?= $data['periode'] ?> </td>
                            <td class="text-center"> <?= $data['sakit'] ?> </td>
                            <td class="text-center"> <?= $data['izin'] ?> </td>
                            <td class="text-center"> <?= $data['alpa'] ?> </td>
                            <td class="text-center"> <?= $data['terlambat'] ?> </td>
                            <td class="text-center"> <?= $data['nilai_produktivitas'] ?>% </td>
                            <td class="text-center"> <?= $data['nilai_absen'] ?>% </td>
                            <td class="text-center bg-success"> <?= $data['nilai_hasil'] ?>% </td>
                        </tr>
                    <?php 
                        $x++;
                        } ?>
                </tbody>
            </table>

        </div>
        <!-- end main content -->
        </div>
    
    
    <script src="<?= base_url()?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>