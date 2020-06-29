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
    <script type="text/javascript">
        window.onload = function() {
            var x = localStorage.getItem('stat');
            if (x === 'lain') {
                f_lain();
            }
            else if (x === 'putus'){
                f_put();
            }
            else if (x === 'other'){
                f_other();
            }
    }
    </script>
    
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
                                    <td><?= $karyawan['start_periode']; ?> - <?= $karyawan['end_periode']; ?></td>
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
                                    <th scope="col"><h5>Hasil Evaluasi</h5></th>                                    
                                </tr>
                                </thead>
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

                <form action="<?= base_url();?>C_kesimpulan_penilaian/saveKesimpulan/<?= $karyawan['id_karyawan']?>" method="post">
                    <div class="row"">
                        <div class="col-md-12">
                            <div class="detail_area" style="height: 350px;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col"><h5>Kesimpulan</h5></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                    
                                    <!-- start dropdown -->
                                    <div style="margin-left: 27%;">
                                        <div>
                                            <label for="cars" class="combo_lbl">Status Kontrak PKWT</label>
                                        </div>
    
                                        <div style="margin: 5px 5px 5px 5px;">
                                            <select id="combo1" name="combo1" onchange="func1()" class="combo-style">
                                                <option disabled selected value="NULL">-- status --</option>
                                                <option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
                                                <option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
                                                <option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
                                                <option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
                                                <option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
                                            </select>
                                        </div>
                                        <?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
                                        
                                        <div style="margin: 5px 5px 5px 5px; display: none;" id="pagu">
                                            <select id="combo_pagu" name="combo_pagu" class="combo-style">
                                                <option disabled selected value>-- Jenis Pagu --</option>
                                                <option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> >Rutin</option>
                                                <option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> >Proyek / Program</option>
                                            </select>
                                        </div>
                                        <?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>
                                        
                                        <div style="margin: 5px 5px 5px 5px; display: none;" id="putus">
                                            <select id="combo_putus" name="combo_putus" class="combo-style">
                                                <option disabled selected value>-- Alasan diputus --</option>
                                                <option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
                                                <option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
                                            </select>
                                        </div>
                                        <?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>
    
                                        <div style="width: 30%; display: none; margin: 5px 5px 5px 5px;" id="kode_pagu">
                                        <input id="inp_kpagu" name="inp_kpagu" placeholder="kode pagu" type="text" class="form-control input-style">
                                        </div>
                                        <?= form_error('inp_kpagu','<small class="text-danger pl-2">','</small>') ?>
    
                                        <div style="width: 30%; display: none; margin: 5px 5px 5px 5px;" id="Lainnya">
                                            <input id="inp_lainnya" name="inp_lainnya" placeholder="Lainnya" type="text" class="form-control input-style">
                                        </div>
                                        <?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>
    

                                    </div>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="margin-left: 600px; margin-top: 10px;">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
                
        </div>

        <!-- end main content -->

    
    <script src="<?= base_url()?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/style/jscript.js"></script>
</body>
</html>