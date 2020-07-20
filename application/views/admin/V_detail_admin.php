<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">
</head>
<body>
    
    <div class="container">
        <!-- -----------------------BATAS SUCI----------------------- -->

        <!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>

        <!-- start main content here..-->
        <div class="container" style="background-color: #E7E7E7;">

            <div class="container main_bgr_dash" style="width: 75%;">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail_area">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"><h5>Identitas Karyawan</h5></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td><?= $karyawan['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NIK PKWT</th>
                                    <td><?= $karyawan['nik']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Divisi / Unit Bisnis</th>
                                    <td><?= $karyawan['divisi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Unit Kerja / Bagian</th>
                                    <td><?= $karyawan['bagian']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan</th>
                                    <td><?= $karyawan['jabatan']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Periode Kontrak</th>
                                    <td><?= $karyawan['start_periode']; ?> s.d. <?= $karyawan['end_periode']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="detail_area">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">
                                    <h5>Hasil Evaluasi</h5>
                                    <h6 class="text-secondary">
                                        <?php if ($evaluasi['nilai_eval'] != -1) { ?>
                                            <small>
                                                Graded by : <?=  $evaluasi['nama_atasan'] ?> - <?=  $evaluasi['nik_atasan'] ?> <br> at <?=  $evaluasi['date_fill'] ?>
                                            </small>
                                        <?php } else { ?>
                                            <small>
                                                Should be graded by : <?=  $evaluasi['nama_atasan'] ?> - <?=  $evaluasi['nik_atasan'] ?>
                                            </small>
                                        <?php } ?>
                                    </h6>
                                    
                                    </th>
                                    
                                </tr>
                                </thead>
                                
                                <!-- tag php IF here.. -->
                                <?php if ($evaluasi['nilai_eval'] != -1) { ?>
                                
                                <tbody>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        
                                        <button class="btn btn-light" style="width: 100%; height: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            <h5>Innovation</h5> 
                                        </button>
                                        
                                        <div class="collapse" id="collapseExample">
                                            <div>
                                                
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Inisiatif</th>
                                                        <td><?= $evaluasi['inisiatif']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Daya Kreatifitas</th>
                                                        <td><?= $evaluasi['daya_kreatif']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Problem Solving</th>
                                                        <td><?= $evaluasi['prob_solve']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        
                                        <button class="btn btn-light" style="width: 100%; height: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                            <h5>Integrity</h5> 
                                        </button>
                                        
                                        <div class="collapse" id="collapseExample2">
                                            <div>
                                                
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Tanggung Jawab</th>
                                                        <td><?= $evaluasi['tang_jawab']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Komitmen Kepada Perusahaan</th>
                                                        <td><?= $evaluasi['kom_per']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Etika Kerja</th>
                                                        <td><?= $evaluasi['etika_kerja']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        
                                        <button class="btn btn-light" style="width: 100%; height: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                            <h5>Customer Oriented</h5> 
                                        </button>
                                        
                                        <div class="collapse" id="collapseExample3">
                                            <div>
                                                
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Adaptasi Kerja</th>
                                                        <td><?= $evaluasi['adap_kerja']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</th>
                                                        <td><?= $evaluasi['pelayanan']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kemampuan Melaksanaan Tugas</th>
                                                        <td><?= $evaluasi['kem_tugas']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        
                                        <button class="btn btn-light" style="width: 100%; height: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                            <h5>Team Work</h5> 
                                        </button>
                                        
                                        <div class="collapse" id="collapseExample4">
                                            <div>
                                                
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Penyesuaian Diri</th>
                                                        <td><?= $evaluasi['pen_diri']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kemampuan Berkomunikasi</th>
                                                        <td><?= $evaluasi['kem_komunikasi']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kerja Sama</th>
                                                        <td><?= $evaluasi['ker_sama']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0px 0px 0px 0px;">
                                        
                                        <button class="btn btn-light" style="width: 100%; height: 100%;" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                                            <h5>Professionalism</h5> 
                                        </button>
                                        
                                        <div class="collapse" id="collapseExample5">
                                            <div>
                                                
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">Disiplin</th>
                                                        <td><?= $evaluasi['disiplin']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sistematika Kerja</th>
                                                        <td><?= $evaluasi['sis_kerja']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Hasil Pekerjaan</th>
                                                        <td><?= $evaluasi['has_kerja']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </td>
                                </tr>                                
                                </tbody>
                            <!-- php end IF here.. -->
                                <?php } else { ?>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h5 class="text-danger">evaluation not graded yet</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail_area">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"><h5>Absensi</h5></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Hari Kerja</th>
                                    <td><?= $absensi['periode']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sakit</th>
                                    <td><?= $absensi['sakit']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Izin</th>
                                    <td><?= $absensi['izin']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alpa</th>
                                    <td><?= $absensi['alpa']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Absen Terlambat</th>
                                    <td><?= $absensi['terlambat']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="detail_area">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"><h5>Kesimpulan</h5></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($karyawan['status']==='Diputus') { ?>
                                    
                                
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><?= $karyawan['status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alasan</th>
                                        <td> <?= $karyawan['alasan']; ?> </td>
                                    </tr>
                                <?php }
                                else if ($karyawan['status']==='Diperpanjang 1 Tahun' || $karyawan['status']==='Diperpanjang 6 Bulan' || $karyawan['status']==='Diperpanjang 3 Bulan') { ?>
                                    
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><?= $karyawan['status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pagu Anggaran</th>
                                        <td> <?= $karyawan['anggaran']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kode Pagu</th>
                                        <td> <?= $karyawan['kode_pagu']; ?> </td>
                                    </tr>
                                <?php } else if($karyawan['status']=='-') { ?>
                                    <tr>
                                        
                                        <td colspan="2" align="center">
                                        <h5 class="text-danger"> contract status not graded yet </h5>
                                        </td>
                                    </tr>
                                <?php } else if($karyawan['status'] == 'Diputus'){?>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><?= $karyawan['status']; ?></td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><?= $karyawan['status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pagu Anggaran</th>
                                        <td> <?= $karyawan['anggaran']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kode Pagu</th>
                                        <td> <?= $karyawan['kode_pagu']; ?> </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="detail_area">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col"><h5>Hasil Evaluasi Penilaian</h5></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <!-- IF php here -->
                                <?php if ($evaluasi['nilai_eval'] != -1) { ?>
                                
                                    <tbody>
                                        <tr>
                                            <th scope="row">Absensi</th>
                                            <td><?= $absensi['nilai_absen']; ?>%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hasil Evaluasi</th>
                                            <td><?= $evaluasi['nilai_eval']; ?>%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Penilaian Kerja</th>
                                            <td><?= $karyawan['nilai_hasil']; ?>%</td>
                                        </tr>
                                    </tbody>
                                <!-- end IF php here -->
                                <?php } else { ?>
                                    
                                    <tbody>
                                        <tr>
                                            <th scope="row">Absensi</th>
                                            <td><?= $absensi['nilai_absen']; ?>%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hasil Evaluasi</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Penilaian Kerja</th>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        
                        <div style="margin : 20px 2px 2px 135px">
                            <?php if ($karyawan['status'] != 'Diputus' && $karyawan['kode_pagu'] != '-') { ?>
                                <a href="<?php echo site_url('C_cetak/index/' . $karyawan['id_karyawan']); ?>" target="_blank"><button type="button" class="btn btn-secondary">Print</button></a>
                            <?php } else if($karyawan['status'] == 'Diputus') { ?>
                                <a href="<?php echo site_url('C_cetak/index/' . $karyawan['id_karyawan']); ?>" target="_blank"><button type="button" class="btn btn-secondary">Print</button></a>
                            <?php } else { ?>
                                <a href="<?php echo site_url('C_cetak/index/' . $karyawan['id_karyawan']); ?>"><button type="button" class="btn btn-secondary" disabled>Print</button></a>
                            <?php } ?>
                        </div>

                    </div>
                </div>


            </div>
                
        </div>

        <!-- end main content -->


    
    <script src="<?= base_url()?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>