<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .scrollable_table {
            background-color: white; display: block; overflow: scroll; height: 350px; table-layout: fixed;
        }

        .thead_style{
            background-color: #dbdbdb;
        }

        td{
            width: 100px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT LEN</title>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">
</head>
<body>
    <script type="text/javascript">
        window.onload = function() {
            var x = localStorage.getItem('stat2');
            if (x === 'block') {
                document.getElementById("datePicker").style.display = "block";
                document.getElementById("datePicker2").style.display = "block";
            }
            else if (x === 'none'){
                document.getElementById("datePicker").style.display = "none";
                document.getElementById("datePicker2").style.display = "none";
            }
        }
    </script>

        <!-- -----------------------BATAS SUCI----------------------- -->
        <div class="container">
            
            
            <!-- NAVBAR  -->
            <?php $this->load->view('navbar_admin.php') ?>
        

        <div class="row">
            <div class="container-fluid ml-3 mr-3" style="background-color: #CFDDFF;">
                <div class="row">
                    <div class="col-md-12">
                    <?= $this->session->flashdata('notFound');?>
                        <form action="<?= site_url('C_report/printFunc')?>" method="POST">
                        <div class="row  mt-2 mb-2">
                                <div class="col-md-4 mt-1">
                                        <select id="com_filter" name="com_filter" class="form-control form-control-sm" onchange="hideCombo()">
                                            <!-- <option disabled selected value> -- filter -- </option> -->
                                            <option value="all" <?= set_select('com_filter', 'all'); ?> > All </option>
                                            <option value="completed" <?= set_select('com_filter', 'completed'); ?> > Completed grading only</option>
                                            <option value="date" <?= set_select('com_filter', 'date'); ?> > By Date </option>
                                        </select>
                                        <?= form_error('com_filter','<small class="text-danger pl-2">','</small>') ?>
                                    
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-2" id="datePicker" style="display: none;">
                                    <input name="dateStart" placeholder="start" value="<?= set_value('dateStart')?>" type="date" class="form-control form-control-sm">
                                    <?= form_error('dateStart','<small class="text-danger pl-2">','</small>') ?>
                                </div> 
                                <div class="col-md-2" id="datePicker2" style="display: none;">
                                    <input name="dateEnd" placeholder="end" value="<?= set_value('dateEnd')?>" type="date" class="form-control form-control-sm">
                                    <?= form_error('dateEnd','<small class="text-danger pl-2">','</small>') ?>
                                </div> 
                            </div>

                            <div class="row mt-2 mb-2 mt-2">
                                <div class="col-md-1 text-center">
                                    <button name="p_btn" type="submit" value="preview" id="btPrint" class="btn btn-secondary btn-md">Preview</button></a>  
                                </div>
                                <div class="col-md-1 text-center">
                                    <button name="p_btn" type="submit" value="print" id="btPrint" class="btn btn-info btn-md">Print</button></a>  
                                </div>
                            </div>
                            

                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- start main content here..-->

    <div class="row">
        <div class="col-md-12">
            <div class="container" style="background-color: #CFDDFF;">
                <div class="row">
                    <div class="col-md-12 pt-2 pb-2">
                    <table class="scrollable_table table table-bordered table-sm">
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

                            <!-- BATAS THEAD -->
                            
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
                            
                            <!-- BATAS TBODY -->
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
                </div>
            
        
        </div>
        </div>
    </div>

    
        
        <!-- end main content -->
    </div>
    
    
    <script src="<?= base_url()?>/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/style/jscript.js"></script>
</body>
</html>