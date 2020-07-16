<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nilai Atasan</title>

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/style1.css">

	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
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
									<td><?= $nama?></td>
								</tr>
								<tr>
									<th scope="row">NIK PKWT</th>
									<td><?= $nik?></td>
								</tr>
								<tr>
									<th scope="row">Divisi / Unit Bisnis</th>
									<td><?= $divisi?></td>
								</tr>
								<tr>
									<th scope="row">Unit Kerja / Bagian</th>
									<td><?= $bagian?></td>
								</tr>
								<tr>
									<th scope="row">Jabatan</th>
									<td><?= $jabatan?></td>
								</tr>
								<tr>
									<th scope="row">Periode Kontrak</th>
									<td><?= $start_periode," - ",$end_periode?> </td>
								</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="margin: 5px 10px">
				
					<h3 style="margin-top: 15px">Hasil Evaluasi</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<form method="POST" action="<?= site_url('C_nilai_atasan');?>/addPenilaian/<?= $id_karyawan?>" style="margin: 0px 10px; width: 100%"> 
						<h4>Innovation</h4>
						<div class="form-group row form_eval">
							<label for="nama" class="col-md-4 col-form-label">Inisiatif</label>
							<div class="col-md-4">
								<select name="inisiatif" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('inisiatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('inisiatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('inisiatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('inisiatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('inisiatif', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('inisiatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Daya Kreativitas</label>
							<div class="col-md-4">
								<select name="kreatif" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('kreatif', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('kreatif', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('kreatif', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('kreatif', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('kreatif', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('kreatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="divisi" class="col-md-4 col-form-label">Problem Solving</label>
							<div class="col-md-4">
								<select  name="probsolv" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('probsolv', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('probsolv', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('probsolv', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('probsolv', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('probsolv', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('probsolv','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Integrity</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Tanggung Jawab</label>
							<div class="col-md-4">
								<select  name="tjawab" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('tjawab', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('tjawab', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('tjawab', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('tjawab', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('tjawab', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('tjawab','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Komitmen Kepada Perusahaan</label>
							<div class="col-md-4">
								<select  name="komitmen" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('komitmen', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('komitmen', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('komitmen', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('komitmen', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('komitmen', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('komitmen','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Etika Kerja</label>
							<div class="col-md-4">
								<select name="etika" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('etika', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('etika', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('etika', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('etika', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('etika', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('etika','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Customer Oriented</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Adaptasi Kerja</label>
							<div class="col-md-4">
								<select name="adaptasi" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('adaptasi', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('adaptasi', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('adaptasi', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('adaptasi', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('adaptasi', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('adaptasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</label>
							<div class="col-md-4">
								<select name="pelayanan" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('pelayanan', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('pelayanan', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('pelayanan', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('pelayanan', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('pelayanan', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('pelayanan','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kemampuan Melaksanakan Tugas</label>
							<div class="col-md-4">
								<select  name="ktugas" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('ktugas', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('ktugas', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('ktugas', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('ktugas', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('ktugas', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('ktugas','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Team Work</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Penyesuaian Diri</label>
							<div class="col-md-4">
								<select name="penyesuaian" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('penyesuaian', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('penyesuaian', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('penyesuaian', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('penyesuaian', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('penyesuaian', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('penyesuaian','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Kemampuan Berkomunikasi</label>
							<div class="col-md-4">
								<select name="komunikasi" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('komunikasi', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('komunikasi', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('komunikasi', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('komunikasi', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('komunikasi', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('komunikasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kerja Sama</label>
							<div class="col-md-4">
								<select name="kerjasama" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('kerjasama', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('kerjasama', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('kerjasama', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('kerjasama', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('kerjasama', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('kerjasama','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<h4>Professionalism</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Disiplin</label>
							<div class="col-md-4">
								<select name="disiplin" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('disiplin', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('disiplin', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('disiplin', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('disiplin', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('disiplin', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('disiplin','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Sistematika Kerja</label>
							<div class="col-md-4">
								<select name="skerja" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('skerja', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('skerja', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('skerja', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('skerja', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('skerja', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('skerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Hasil Pekerjaan</label>
							<div class="col-md-4">
								<select name="hkerja" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1" <?= set_select('hkerja', '1'); ?>>1 (Sangat Kurang)</option>
									<option value="2" <?= set_select('hkerja', '2'); ?>>2 (Kurang)</option>
									<option value="3" <?= set_select('hkerja', '3'); ?>>3 (Cukup)</option>
									<option value="4" <?= set_select('hkerja', '4'); ?>>4 (Baik)</option>
									<option value="5" <?= set_select('hkerja', '5'); ?>>5 (Sangat Baik)</option>
								</select>
								<?= form_error('hkerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<hr>
						<h4>Kesimpulan</h4>
						<!-------------------------- DARI SINI WOYYY -------------------------->

						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Status</label>
							<div class="col-md-4">
								<select id="combo1" name="combo1" onchange="func1()" class="form-control">
									<option disabled selected value="NULL">-- status --</option>
                                    <option value="Diperpanjang 3 Bulan" <?= set_select('combo1', 'Diperpanjang 3 Bulan'); ?> >Diperpanjang 3 Bulan</option>
                                    <option value="Diperpanjang 1 Tahun" <?= set_select('combo1', 'Diperpanjang 1 Tahun'); ?> >Diperpanjang 1 Tahun</option>
									<option value="Diperpanjang 6 Bulan" <?= set_select('combo1', 'Diperpanjang 6 Bulan'); ?> >Diperpanjang 6 Bulan</option>
                                    <option value="Diputus" <?= set_select('combo1', 'Diputus'); ?> >Diputus</option>
                                    <option value="Lainnya" <?= set_select('combo1', 'Lainnya'); ?> >Lainnya</option>
                                </select>
								<?= form_error('combo1','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval" id="Lainnya" style="display: none;">
							<label for="bagian" class="col-md-4 col-form-label">Lainnya</label>
							<div class="col-md-4">
								<input id="inp_lainnya" name="inp_lainnya" placeholder="Lainnya" type="text" class="form-control">	
								<?= form_error('inp_lainnya','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval" id="pagu">
							<label for="bagian" class="col-md-4 col-form-label">Jenis Pagu</label>
							<div class="col-md-4">
								<select id="combo_pagu" name="combo_pagu" class="form-control">
                                    <option disabled selected value>-- Jenis Pagu --</option>
                                    <option value="Rutin" <?= set_select('combo_pagu', 'Rutin'); ?> >Rutin</option>
                                    <option value="Proyek/program"<?= set_select('combo_pagu', 'Proyek/program'); ?> >Proyek / Program</option>
                                </select>
								<?= form_error('combo_pagu','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval" id="putus">
							<label for="bagian" class="col-md-4 col-form-label">Alasan</label>
							<div class="col-md-4">
							<select id="combo_putus" name="combo_putus" class="form-control">
                                <option disabled selected value>-- Alasan diputus --</option>
                                <option value="Hasil Evaluasi Penilaian" <?= set_select('combo_putus', 'Hasil Evaluasi Penilaian'); ?> >Hasil Evaluasi Penilaian</option>
                                <option value="Kegiatan Proyek/Program Selesai" <?= set_select('combo_putus', 'Kegiatan Proyek/Program Selesai'); ?> >Kegiatan Proyek / Program Selesai</option>
                            </select>
								<?= form_error('combo_putus','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						
						<button type="submit"  class="btn btn-success" style="margin-left: 3%">Save</button>
						
					</div>
					<!-- endrow -->
					
				</form>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url()?>/assets/style/jscript.js"></script>
</body>

</html>