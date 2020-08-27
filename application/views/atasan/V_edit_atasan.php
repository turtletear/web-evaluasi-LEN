<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nilai Atasan</title>

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/style1.css">

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
		<!-- NAVBAR  -->
        <?php $this->load->view('navbar.php') ?>
		<div class="container pt-2" style="background-color: #E7E7E7">
			<div class="container main_bgr_input" style="width: 75%;">
				<div class="row" style="margin: 5px 10px">
					<h3 style="margin-bottom: 15px">Identitas Karyawan</h3>
				</div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="idkar_area">
		                    <table class="table table-striped" style="margin-bottom: 0px">
		                        <tbody>
		                        <tr>
                                    <th scope="row">Nama</th>
                                    <td style="width: 50%"><?= $karyawan['nama']; ?></td>
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
		        <div class="row" style="margin: 5px 10px">
					<h3 style="margin-bottom: 15px; margin-top: 15px">Absensi</h3>
				</div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="idkar_area">
		                    <table class="table table-striped" style="margin-bottom: 0px">
		                        <tbody>
		                        <tr>
                                    <th scope="row">Hari Kerja</th>
                                    <td style="width: 50%;"><?= $absensi['periode']; ?> Hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sakit</th>
                                    <td><?= $absensi['sakit']; ?> Hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Izin</th>
                                    <td><?= $absensi['izin']; ?> Hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alpa</th>
                                    <td><?= $absensi['alpa']; ?> Hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Absen Terlambat</th>
                                    <td><?= $absensi['terlambat']; ?> Hari</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Produktivitas</th>
                                    <td><b><?= $absensi['nilai_produktivitas']; ?>%</b></td>
                                </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
				<div class="row" style="margin: 5px 10px">
				
				<?php 
					function setCombo($val)
					{
						switch ($val) {
							case '5 (Sangat Baik)':
								?>
									<option disabled value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?> selected >5 (Sangat Baik)</option>
								<?php
								break;

							case '4 (Baik)':
								?>
									<option disabled value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?> selected >4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								<?php
								break;

							case '3 (Cukup)':
								?>
									<option disabled value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?> selected >3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								<?php
								break;

							case '2 (Kurang)':
								?>
									<option disabled value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?> selected >2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								<?php
								break;

							case '1 (Sangat Kurang)':
								?>
									<option disabled value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?> selected >1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								<?php
								break;
							
							default:
								?>
									<option disabled selected value> Choose... </option>
									<option value="1" <?= set_select('inisiatif', '1'); ?> selected >1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								<?php
								break;
						}
					}// end func
				
				?>

				<?php
					
					function setJpagu($anggaran)
					{
						if ($anggaran == 'Rutin') {
							?>
								<option disabled value>-- Jenis Pagu --</option>
								<option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> selected >Rutin</option>
								<option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> >Proyek/Program</option>
							<?php
						}
						else{
							?>
								<option disabled value>-- Jenis Pagu --</option>
								<option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> >Rutin</option>
								<option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> selected >Proyek/Program</option>
							<?php
						}
					}

					
					function setStat($stat){
						switch ($stat['status']) {
							case 'Diputus':
								?>
									<script>
										localStorage.setItem('stat','putus');
									</script>
									<select id="combo1" name="combo1" onchange="func1()" class="form-control">
										<option disabled value="NULL">-- status --</option>
										<option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
										<option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
										<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
										<option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> selected >Diputus</option>
										<option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
									</select>
									<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
									<input id="Lainnya" name="inp_lainnya" value="<?= set_value('inp_lainnya')?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
									<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

									<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
										<option disabled selected value>-- Jenis Pagu --</option>
										<option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> >Rutin</option>
										<option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> >Proyek/Program</option>
									</select>
									<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

									<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
										<?php
											if ($stat['alasan'] == 'Hasil Evaluasi Penilaian') {
												?>
												<option disabled value>-- Alasan diputus --</option>
												<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> selected >Hasil Evaluasi Penilaian</option>
												<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
												<?php
											}
											else{
												?>
													<option disabled value>-- Alasan diputus --</option>
													<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
													<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> selected >Kegiatan Proyek / Program Selesai</option>
												<?php
											}
										
										?>
									</select>
									<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>

							<?php
							break;

							case 'Diperpanjang 3 Bulan':
								?>
									<script>
										localStorage.setItem('stat','other');
									</script>
									<select id="combo1" name="combo1" onchange="func1()" class="form-control">
										<option disabled value="NULL">-- status --</option>
										<option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> selected >Diperpanjang 3 Bulan</option>
										<option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
										<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
										<option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
										<option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
									</select>
									<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
									<input id="Lainnya" name="inp_lainnya" value="<?= set_value('inp_lainnya')?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
									<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

									<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
										<?php
											setJpagu($stat['anggaran']);
										?>
									</select>
									<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

									<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
										<option disabled selected value>-- Alasan diputus --</option>
										<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
										<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
									</select>
									<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>

							<?php
							break;

							case 'Diperpanjang 1 Tahun':
								?>
									<script>
										localStorage.setItem('stat','other');
									</script>
									<select id="combo1" name="combo1" onchange="func1()" class="form-control">
										<option disabled value="NULL">-- status --</option>
										<option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
										<option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> selected >Diperpanjang 1 Tahun</option>
										<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
										<option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
										<option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
									</select>
									<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
									<input id="Lainnya" name="inp_lainnya" value="<?= set_value('inp_lainnya')?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
									<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

									<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
										<?php
											setJpagu($stat['anggaran']);
										?>
									</select>
									<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

									<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
										<option disabled selected value>-- Alasan diputus --</option>
										<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
										<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
									</select>
									<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>

							<?php
							break;

							case 'Diperpanjang 6 Bulan':
								?>
									<script>
										localStorage.setItem('stat','other');
									</script>
									<select id="combo1" name="combo1" onchange="func1()" class="form-control">
										<option disabled value="NULL">-- status --</option>
										<option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
										<option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
										<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> selected >Diperpanjang 6 Bulan</option>
										<option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
										<option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
									</select>
									<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
									<input id="Lainnya" name="inp_lainnya" value="<?= set_value('inp_lainnya')?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
									<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

									<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
										<?php
											setJpagu($stat['anggaran']);
										?>
									</select>
									<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

									<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
										<option disabled selected value>-- Alasan diputus --</option>
										<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
										<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
									</select>
									<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>

							<?php
							break;
							
							default:
								?>
									<script>
										localStorage.setItem('stat','lain');
									</script>
									<select id="combo1" name="combo1" onchange="func1()" class="form-control">
										<option disabled value="NULL">-- status --</option>
										<option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
										<option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
										<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> selected >Diperpanjang 6 Bulan</option>
										<option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
										<option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> selected >Lainnya</option>
									</select>
									<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
									<input id="Lainnya" name="inp_lainnya" value="<?= $stat['status'] ?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
									<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

									<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
										<?php
											setJpagu($stat['anggaran']);
										?>
									</select>
									<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

									<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
										<option disabled selected value>-- Alasan diputus --</option>
										<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
										<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
									</select>
									<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>
							<?php
							break;
						}
					}
				?>

					<h3 style="margin-top: 15px">Hasil Evaluasi</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<form method="POST" action="<?= site_url('C_edit_atasan/addPenilaian/' . $karyawan['id_karyawan']); ?>" style="margin: 0px 10px; width: 100%"> 
						<h4>Innovation</h4>
						<div class="form-group row form_eval">
							<label for="nama" class="col-md-4 col-form-label">Inisiatif</label>
							<div class="col-md-4">
								<select name="inisiatif" class="form-control">
									<?php
										setCombo($evaluasi['inisiatif']);
									?>
								</select>
								<?= form_error('inisiatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Daya Kreativitas</label>
							<div class="col-md-4">
								<select name="kreatif" class="form-control">
									<?php
										setCombo($evaluasi['daya_kreatif']);
									?>
								</select>
								<?= form_error('kreatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="divisi" class="col-md-4 col-form-label">Problem Solving</label>
							<div class="col-md-4">
								<select  name="probsolv" class="form-control">
									<?php
										setCombo($evaluasi['prob_solve']);
									?>
								</select>
								<?= form_error('probsolv','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Integrity</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Tanggung Jawab</label>
							<div class="col-md-4">
								<select  name="tjawab" class="form-control">
									<?php
										setCombo($evaluasi['tang_jawab']);
									?>
								</select>
								<?= form_error('tjawab','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Komitmen Kepada Perusahaan</label>
							<div class="col-md-4">
								<select  name="komitmen" class="form-control">
									<?php
										setCombo($evaluasi['kom_per']);
									?>
								</select>
								<?= form_error('komitmen','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Etika Kerja</label>
							<div class="col-md-4">
								<select name="etika" class="form-control">
									<?php
										setCombo($evaluasi['etika_kerja']);
									?>
								</select>
								<?= form_error('etika','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Customer Oriented</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Adaptasi Kerja</label>
							<div class="col-md-4">
								<select name="adaptasi" class="form-control">
									<?php
										setCombo($evaluasi['adap_kerja']);
									?>
								</select>
								<?= form_error('adaptasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</label>
							<div class="col-md-4">
								<select name="pelayanan" class="form-control">
									<?php
										setCombo($evaluasi['pelayanan']);
									?>
								</select>
								<?= form_error('pelayanan','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kemampuan Melaksanakan Tugas</label>
							<div class="col-md-4">
								<select  name="ktugas" class="form-control">
									<?php
										setCombo($evaluasi['kem_tugas']);
									?>
								</select>
								<?= form_error('ktugas','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Team Work</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Penyesuaian Diri</label>
							<div class="col-md-4">
								<select name="penyesuaian" class="form-control">
									<?php
										setCombo($evaluasi['pen_diri']);
									?>
								</select>
								<?= form_error('penyesuaian','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Kemampuan Berkomunikasi</label>
							<div class="col-md-4">
								<select name="komunikasi" class="form-control">
									<?php
										setCombo($evaluasi['kem_komunikasi']);
									?>
								</select>
								<?= form_error('komunikasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kerja Sama</label>
							<div class="col-md-4">
								<select name="kerjasama" class="form-control">
									<?php
										setCombo($evaluasi['ker_sama']);
									?>
								</select>
								<?= form_error('kerjasama','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Professionalism</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Disiplin</label>
							<div class="col-md-4">
								<select name="disiplin" class="form-control">
									<?php
										setCombo($evaluasi['disiplin']);
									?>
								</select>
								<?= form_error('disiplin','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Sistematika Kerja</label>
							<div class="col-md-4">
								<select name="skerja" class="form-control">
									<?php
										setCombo($evaluasi['sis_kerja']);
									?>
								</select>
								<?= form_error('skerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Hasil Pekerjaan</label>
							<div class="col-md-4">
								<select name="hkerja" class="form-control">
									<?php
										setCombo($evaluasi['has_kerja']);
									?>
								</select>
								<?= form_error('hkerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<hr>
						<h4>Kesimpulan</h4>
						<!-------------------------- DARI SINI WOYYY -------------------------->

						<div class="form-group row form_eval">
							<div class="col-md-4">
								<label for="bagian" class="mt-2">Status</label>
							</div>
							
							<div class="col-md-4">
								<?php
									setStat($karyawan)
								?>
								<!-- <select id="combo1" name="combo1" onchange="func1()" class="form-control">
									<option disabled selected value="NULL">-- status --</option>
                                    <option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
                                    <option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
									<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
                                    <option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
                                    <option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
                                </select>
								<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
								
								<input id="Lainnya" name="inp_lainnya" value="<?= set_value('inp_lainnya')?>" placeholder="Lainnya" type="text" class="form-control mt-1" style="display: none;">	
								<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>

								<select id="pagu" name="combo_pagu" class="form-control mt-1" style="display: none;">
                                    <option disabled selected value>-- Jenis Pagu --</option>
                                    <option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> >Rutin</option>
                                    <option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> >Proyek/Program</option>
                                </select>
								<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>

								<select id="putus" name="combo_putus" class="form-control mt-1" style="display: none;">
									<option disabled selected value>-- Alasan diputus --</option>
									<option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
									<option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
								</select>
								<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?> -->

							</div>
						</div>

						<center><button type="submit"  class="btn btn-success justify-content-center" style="width: 97%;">Save</button></center>
						
					</div>
					<!-- endrow -->
					
				</form>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url()?>/assets/style/jscript.js"></script>
		<!-- JS, Popper.js, and jQuery -->
		<script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>