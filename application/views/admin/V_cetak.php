<!DOCTYPE html>
<html lang="en">
<head>

    <title>Cetak PDF</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/style1.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <!-- <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script> -->

    <style>
        table.table-fit {
            width: auto !important;
            table-layout: auto !important;
            border-collapse: collapse;
        }
        table.table-fit thead th, table.table-fit tfoot th {
            width: auto !important;
        }
        table.table-fit tbody td, table.table-fit tfoot td {
            width: auto !important;
        }
        table.table-bordered{
            border:1px solid black;
            margin-top:20px;
          }
        table.table-bordered > thead > tr > th{
            border:1px solid black;
        }
        table.table-bordered > tbody > tr > td{
            border:1px solid black;
        }
        table.table-bordered > tbody > tr > th{
            border:1px solid black;
        }
        table.table-borderless thead > tr > th{
            text-align: left;
        }

        
    </style>

</head>

<body style="font-family:Times New Roman;">

    <center><h1 style="margin-top: -10px;">Evaluasi Karyawan Waktu Tertentu<br>
        PT LEN INDUSTRI</h1></center>

    <div class="container-fluid" style="font-size:11px">

        <div class="container-fluid">
            <div style="float: right;">
                <p>Dinilai Oleh : <?= $evaluasi['nama_atasan']; ?>
                <br>Pada Tanggal : <?= $evaluasi['date_fill']; ?>
            </div>            
        </div>

        <hr>

        <div class="container-fluid" style="margin-top: 40px;">
            <br><b>I. Identitas Karyawan Waktu Tertentu</b>
            <div style="margin-left: 20px; margin-top: 5px;">
                <table class="table table-sm table-borderless table-fit" style="text-align: left;">
                    <tr>
                        <td><b>Nama</b></td>
                        <td> : </td>
                        <td><?= $karyawan['nama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>NIK PKWT</b></td>
                        <td> : </td>
                        <td><?= $karyawan['nik']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Divisi / Unit Bisnis</b></td>
                        <td> : </td>
                        <td><?= $karyawan['divisi']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Unit Kerja / Bagian</b></td>
                        <td> : </td>
                        <td><?= $karyawan['bagian']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jabatan</b></td>
                        <td> : </td>
                        <td><?= $karyawan['jabatan']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Periode Kontrak</b></td>
                        <td> : </td>
                        <td><?= $karyawan['start_periode']; ?> Sampai Dengan <?= $karyawan['end_periode']; ?></td>
                    </tr>
                </table>
            </div>        
        <!-- </div> -->

        <!-- <div class="container" style="margin-top: 20px;"> -->
            <br><b>II. Hasil Evaluasi</b>
            <div style="margin-left: 20px; margin-top: -10px;">
                <table class="table table-sm table-bordered table-fit">
                    <thead style="text-align: center; background-color: #c2c2c2;">
                        <tr>
                            <th scope="row" colspan="2">Aspek Penilaian</th>
                            <th scope="row">  Skala Nilai  </th>
                            <th scope="row">  Persentase  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-weight: bold; background-color: #e6e6e6">
                            <td><center>A</center></td>
                            <td colspan="3">Innovation</td>
                        </tr>
                        <tr>
                            <td><center>1</center></td>
                            <td>Inisiatif</td>
                            <td><center><?= $evaluasi['inisiatif']; ?></center></td>
                            <td><center><?= $eval['inisiatif']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Daya Kreativitas</td>
                            <td><center><?= $evaluasi['daya_kreatif']; ?></center></td>
                            <td><center><?= $eval['daya_kreatif']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Problem Solving</td>
                            <td><center><?= $evaluasi['prob_solve']; ?></center></td>
                            <td><center><?= $eval['prob_solve']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; background-color: #e6e6e6">
                            <td><center>B</center></td>
                            <td colspan="3">Integrity</td>
                        </tr>
                        <tr>
                            <td><center>1</center></td>
                            <td>Tanggung Jawab</td>
                            <td><center><?= $evaluasi['tang_jawab']; ?></center></td>
                            <td><center><?= $eval['tang_jawab']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Komitmen Kepada Perusahaan</td>
                            <td><center><?= $evaluasi['kom_per']; ?></center></td>
                            <td><center><?= $eval['kom_per']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Etika Kerja</td>
                            <td><center><?= $evaluasi['etika_kerja']; ?></center></td>
                            <td><center><?= $eval['etika_kerja']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; background-color: #e6e6e6">
                            <td><center>C</center></td>
                            <td colspan="3">Customer Oriented</td>
                        </tr>
                        <tr>
                            <td><center>1</center></td>
                            <td>Adaptasi Kerja</td>
                            <td><center><?= $evaluasi['adap_kerja']; ?></center></td>
                            <td><center><?= $eval['adap_kerja']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Pelayanan Terhadap Unit Kerja / Pihak Eksternal</td>
                            <td><center><?= $evaluasi['pelayanan']; ?></center></td>
                            <td><center><?= $eval['pelayanan']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Kemampuan Melaksanaan Tugas</td>
                            <td><center><?= $evaluasi['kem_tugas']; ?></center></td>
                            <td><center><?= $eval['kem_tugas']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; background-color: #e6e6e6">
                            <td><center>D</center></td>
                            <td colspan="3">Team Work</td>
                        </tr>
                        <tr>
                            <td><center>1</center></td>
                            <td>Penyesuaian Diri</td>                            
                            <td><center><?= $evaluasi['pen_diri']; ?></center></td>                            
                            <td><center><?= $eval['pen_diri']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Kemampuan Berkomunikasi</td>
                            <td><center><?= $evaluasi['kem_komunikasi']; ?></center></td>
                            <td><center><?= $eval['kem_komunikasi']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Kerja Sama</td>
                            <td><center><?= $evaluasi['ker_sama']; ?></center></td>
                            <td><center><?= $eval['ker_sama']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; background-color: #e6e6e6">
                            <td><center>E</center></td>
                            <td colspan="3">Professionalism</td>
                        </tr>
                        <tr>
                            <td><center>1</center></td>
                            <td>Disiplin</td>
                            <td><center><?= $evaluasi['disiplin']; ?></center></td>
                            <td><center><?= $eval['disiplin']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Sistematika Kerja</td>
                            <td><center><?= $evaluasi['sis_kerja']; ?></center></td>
                            <td><center><?= $eval['sis_kerja']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Hasil Pekerjaan</td>
                            <td><center><?= $evaluasi['has_kerja']; ?></center></td>
                            <td><center><?= $eval['has_kerja']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; text-align: center; background-color: #b3b3b3;">
                            <td colspan="3">Hasil Penilaian</td>
                            <td><?= $evaluasi['nilai_kinerja']; ?>%</td>
                        </tr>
                    </tbody>                    
                </table>                
            </div>
        <!-- </div> -->

        <!-- <div class="container" style="margin-top: 20px;"> -->
            <br><b>III. Pelanggaran Absensi</b>
            <div style="margin-left: 20px; margin-top: -10px;">
                <table class="table table-sm table-bordered table-fit">
                    <thead style="text-align: center; background-color: #c2c2c2;">
                        <tr>
                            <th scope="row" colspan="2">Absensi</th>
                            <th scope="row">  Jumlah  </th>
                            <th scope="row">  Persentase  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><center>1</center></td>
                            <td>Hari Kerja (Durasi Kontrak)</td>
                            <td><center><?= $absen['periode']; ?></center></td>
                            <td><center><?= $absensi['periode']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>2</center></td>
                            <td>Sakit</td>
                            <td><center><?= $absensi['sakit']; ?></center></td>
                            <td><center><?= $absen['sakit']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>3</center></td>
                            <td>Izin</td>
                            <td><center><?= $absensi['izin']; ?></center></td>
                            <td><center><?= $absen['izin']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>4</center></td>
                            <td>Alpa</td>
                            <td><center><?= $absensi['alpa']; ?></center></td>
                            <td><center><?= $absen['alpa']; ?>%</center></td>
                        </tr>
                        <tr>
                            <td><center>5</center></td>
                            <td>Absen Terlambat (1 Hari = 8 Jam)</td>
                            <td><center><?= $absensi['terlambat']; ?></center></td>
                            <td><center><?= $absen['terlambat']; ?>%</center></td>
                        </tr>
                        <tr style="font-weight: bold; text-align: center; background-color: #b3b3b3;">
                            <th scope="row" colspan="3">Absensi</th>
                            <td><center><?= $absen['nilai_produktivitas']; ?>%</center></td>
                        </tr>
                    </tbody>  
                </table>
            </div>            
        <!-- </div> -->

        <!-- <div class="container" style="margin-top: 20px;"> -->
            <br><b>Kesimpulan : </b>
            <div style="margin-left: 20px;">
                <table class="table table-sm table-borderless table-fit" style="border: 1px solid white; text-align: left;">
                    <?php if ($karyawan['status']==='Diputus') { ?>                                  
                                
                        <tr>
                            <td><b>Status</b></td>
                            <td> : </td>
                            <td><?= $karyawan['status']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Alasan</b></td>
                            <td> : </td>
                            <td> <?= $karyawan['alasan']; ?> </td>
                        </tr>
                    <?php }
                    else if ($karyawan['status']==='Diperpanjang 1 Tahun' || $karyawan['status']==='Diperpanjang 6 Bulan' || $karyawan['status']==='Diperpanjang 3 Bulan') { ?>
                        
                        <tr>
                            <td><b>Status</b></th>
                            <td> : </td>
                            <td><?= $karyawan['status']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Pagu Anggaran</b></td>
                            <td> : </td>
                            <td> <?= $karyawan['anggaran']; ?> </td>
                        </tr>
                        <tr>
                            <td><b>Kode Pagu</b></td>
                            <td> : </td>
                            <td> <?= $karyawan['kode_pagu']; ?> </td>
                        </tr>
                    <?php } else{?>
                        <tr>
                            <td><b>Status</b></td>
                            <td> : </td>
                            <td><?= $karyawan['status']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        <!-- </div> -->

            <div class="container" style=" margin-left: 20px;">
                <table class="table table-sm table-bordered table-fit" style="width: 50%" >
                    <thead style="background-color: #c2c2c2; text-align: center;">
                    <tr>
                        <th scope="row" colspan="2">Hasil Evaluasi Penilaian</th>
                        <th scope="row">  Nilai  </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><center>1</center></td>
                        <td>  Hasil Evaluasi  </td>
                        <td><center><?= $evaluasi['nilai_eval']; ?>%</center></td>
                    </tr>
                    <tr>
                        <td><center>2</center></td>
                        <td>Absensi</td>
                        <td><center><?= $absensi['nilai_absen']; ?>%</center></td>
                    </tr>
                    <tr style="background-color: #b3b3b3; font-weight: bold;">
                        <th scope="row" colspan="2"><center>Penilaian Kerja</center></th>
                        <td><center><?= $karyawan['nilai_hasil']; ?>%</center></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>