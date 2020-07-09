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
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('inisiatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Daya Kreativitas</label>
							<div class="col-md-4">
								<select name="kreatif" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('kreatif','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="divisi" class="col-md-4 col-form-label">Problem Solving</label>
							<div class="col-md-4">
								<select  name="probsolv" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
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
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('tjawab','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Komitmen Kepada Perusahaan</label>
							<div class="col-md-4">
								<select  name="komitmen" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('komitmen','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Etika Kerja</label>
							<div class="col-md-4">
								<select name="etika" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
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
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('adaptasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</label>
							<div class="col-md-4">
								<select name="pelayanan" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('pelayanan','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kemampuan Melaksanakan Tugas</label>
							<div class="col-md-4">
								<select  name="ktugas" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
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
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('penyesuaian','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Kemampuan Berkomunikasi</label>
							<div class="col-md-4">
								<select name="komunikasi" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('komunikasi','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kerja Sama</label>
							<div class="col-md-4">
								<select name="kerjasama" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
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
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('disiplin','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Sistematika Kerja</label>
							<div class="col-md-4">
								<select name="skerja" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('skerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Hasil Pekerjaan</label>
							<div class="col-md-4">
								<select name="hkerja" class="form-control">
									<option disabled selected value>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
								<?= form_error('hkerja','<small class="text-danger pl-2">','</small>') ?>
							</div>
						</div>
						<button type="submit"  class="btn btn-success" style="margin-left: 3%">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>