<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/style/style1.css">
</head>
<body>
    
    <div class="container">
        <!-- -----------------------BATAS SUCI----------------------- -->


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
                                    <td><?= $karyawan->nama; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">NIK PKWT</th>
                                    <td><?= $karyawan->nik; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Divisi / Unit Bisnis</th>
                                    <td><?= $karyawan->divisi; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Unit Kerja / Bagian</th>
                                    <td><?= $karyawan->bagian; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan</th>
                                    <td><?= $karyawan->jabatan; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Periode Kontrak</th>
                                    <td><?= $karyawan->start_periode; ?> - <?= $karyawan->end_periode; ?></td>
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
                                                        <td><?= $evaluasi->inisiatif; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Daya Kreatifitas</th>
                                                        <td><?= $evaluasi->daya_kreatif; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Problem Solving</th>
                                                        <td><?= $evaluasi->prob_solve; ?></td>
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
                                                        <td><?= $evaluasi->tang_jawab; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Komitmen Kepada Perusahaan</th>
                                                        <td><?= $evaluasi->kom_per; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Etika Kerja</th>
                                                        <td><?= $evaluasi->etika_kerja; ?></td>
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
                                                        <td><?= $evaluasi->adap_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</th>
                                                        <td><?= $evaluasi->pelayanan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kemampuan Melaksanaan Tugas</th>
                                                        <td><?= $evaluasi->kem_tugas; ?></td>
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
                                                        <td><?= $evaluasi->pen_diri; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kemampuan Berkomunikasi</th>
                                                        <td><?= $evaluasi->kem_komunikasi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Kerja Sama</th>
                                                        <td><?= $evaluasi->ker_sama; ?></td>
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
                                                        <td><?= $evaluasi->disiplin; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Sistematika Kerja</th>
                                                        <td><?= $evaluasi->sis_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Hasil Pekerjaan</th>
                                                        <td><?= $evaluasi->has_kerja; ?></td>
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
                                    <td><?= $absensi->periode; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sakit</th>
                                    <td><?= $absensi->sakit; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Izin</th>
                                    <td><?= $absensi->izin; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Alpa</th>
                                    <td><?= $absensi->alpa; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Absen Terlambat</th>
                                    <td><?= $absensi->terlambat; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <form action="#" method="post">
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
                                            <select id="combo1" onchange="func1()" class="combo-style">
                                                <option disabled selected value>-- status --</option>
                                                <option value="Diperpanjang 3 Bulan">Diperpanjang 3 Bulan</option>
                                                <option value="Diperpanjang 1 Tahun">Diperpanjang 1 Tahun</option>
                                                <option value="Diperpanjang 6 Bulan">Diperpanjang 6 Bulan</option>
                                                <option value="Lainnya" >Lainnya</option>
                                                <option value="Diputus">Diputus</option>
                                            </select>
                                        </div>
                                        
                                        <div style="margin: 5px 5px 5px 5px; display: none;" id="pagu">
                                            <select id="combo_pagu" class="combo-style">
                                                <option disabled selected value>-- Jenis Pagu --</option>
                                                <option value="Lainnya">Rutin</option>
                                                <option value="Diputus">Proyek / Program</option>
                                            </select>
                                        </div>
                                        
                                        <div style="margin: 5px 5px 5px 5px; display: none;" id="putus">
                                            <select id="combo_putus" class="combo-style">
                                                <option disabled selected value>-- Alasan diputus --</option>
                                                <option value="Lainnya">Hasil Evaluasi Penilaian</option>
                                                <option value="Diputus">Kegiatan Proyek / Program Selesai</option>
                                            </select>
                                        </div>
    
                                        <div style="width: 30%; display: none; margin: 5px 5px 5px 5px;" id="kode_pagu">
                                            <input id="inp_kpagu" placeholder="kode pagu" type="text" class="form-control input-style">
                                        </div>
    
                                        <div style="width: 30%; display: none; margin: 5px 5px 5px 5px;" id="Lainnya">
                                            <input id="inp_lainnya" placeholder="Lainnya" type="text" class="form-control input-style">
                                        </div>
    
                                        <div style="width: 30%; display: none; margin: 5px 5px 5px 5px;" id="alasan">
                                            <input id="inp_alasan" placeholder="alasan" type="text" class="form-control input-style">
                                        </div>

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
    <script>
        function func1() {
            var a = document.getElementById("combo1");
            var x = a.value;
            // y = a.options[a.selectedIndex].text;
            // document.getElementById("ab").innerHTML = "ini value " + x;
            var lain = document.getElementById("Lainnya");
            var put = document.getElementById("putus");
            var pag = document.getElementById("pagu");
            var kpag = document.getElementById("kode_pagu")
            if (x === "Lainnya"){
                lain.style.display = "block";
                put.style.display = "none";
                pag.style.display = "none";
                kpag.style.display = "none";
            }
            else if(x === "Diputus") {
                lain.style.display = "none";
                put.style.display = "block";
                pag.style.display = "none";
                kpag.style.display = "none";
            }
            else{
                lain.style.display = "none";
                put.style.display = "none";
                pag.style.display = "block";
                kpag.style.display = "block";
            }
        }
    </script>
    
    <script src="<?= base_url()?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>