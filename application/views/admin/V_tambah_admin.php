<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>

	<link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    

</head>

<body>
	<div class="container">
		<!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>
		<div class="container pt-3 pb-5" style="background-color: #E7E7E7">

			<div class="container main_bgr_input pb-3" style="width: 75%">
			<?= $this->session->flashdata('saveEmp');?>	
				<div class="row" style="margin: 5px 10px">        
					<h3>Identitas Karyawan</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
			<form method="POST" action="<?= base_url("C_tambah_admin/newEntry")?>" style="margin: 10px 10px; width: 100%" id="mainForm" class="mainForm">
					<div class="form-group row">
						<label for="nama" class="col-md-4 col-form-label">Nama Atasan</label>
						<div class="col-md-8">
							<select name="combo_atasan" id="" class="form-control" style="width: 100%;">
								<option disabled selected value>-- Nama Atasan --</option>
								<?php foreach($atasan as $row) {
									echo '<option value="'.$row['id_atasan'].'"'. set_select('combo_atasan', $row['id_atasan']) .'>'.$row['nama'].'</option>';
									
								}?>
							</select>
							<?= form_error('combo_atasan','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="nama" class="col-md-4 col-form-label">Nama Lengkap</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" value="<?= set_value('nama')?>">
							<?= form_error('nama','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-md-4 col-form-label">NIK PKWT</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK PKWT" value="<?= set_value('nik')?>">
							<?= form_error('nik','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label">Divisi / Unit Bisnis</label>
						<div class="col-md-8">
							<select name="divisi" id="divisi" class="form-control" style="width: 100%;">
								<option disabled selected value>-- Divisi --</option>
								<option value="sekper" <?php echo set_select('divisi', 'sekper') ?> >Sekretaris Perusahaan</option>
								<option value="satpi" <?= set_select('divisi', 'satpi'); ?> >Satuan Pengawasan Internal</option>
								<option value="penjmutu" <?= set_select('divisi', 'penjmutu'); ?> >Divisi Penjamin Mutu, Sistem & K3L</option>
								<option value="keuakun">Divisi Keuangan & Akuntansi</option>
								<option value="sdmu">Divisi Sumber Daya Manusia dan Umum</option>
								<option value="pemtek">Divisi Pengembangan Teknologi</option>
								<option value="logis">Divisi Logistik</option>
								<option value="manstraop">Divisi Manajemen Strategi dan Operasi</option>
								<option value="asdir">Asisten Direksi</option>
								<option value="enersisda">UB Energi dan Sistem Daya</option>
								<option value="sistrans">UB Sistem Transportasi</option>
								<option value="elekhan">UB Elektronika Pertahanan</option>
								<option value="tiknav">UB Teknologi Informasi, Komunikasi, dan Navigasi</option>
								<option value="industri">UB Industri</option>
							</select>

							<?= form_error('divisi','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="bagian" class="col-md-4 col-form-label">Unit Kerja / Bagian</label>
						<div class="col-md-8">
							<select name="bagian" id="bagian" class="form-control" style="width: 100%;">
								
							</select>

							<?= form_error('bagian','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="jabatan" class="col-md-4 col-form-label">Jabatan</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= set_value('jabatan')?>">
							<?= form_error('jabatan','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="nik" class="col-md-4 col-form-label">Periode</label>
						<div class="col-md-4">
							<input class="form-control" type="date" id="start_periode" name="start_periode" value="<?= set_value('start_periode')?>">
							<?= form_error('start_periode','<small class="text-danger pl-2">','</small>') ?>
						</div>
						<div class="col-md-4">
							<input class="form-control" type="date" id="end_periode" name="end_periode" value="<?= set_value('end_periode')?>">
							<?= form_error('end_periode','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>					
				</div>

				<div class="row" style="margin: 5px 10px">
					<h3>Absensi</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group row">
									<label for="ttl_hari" class="col-md-6 col-form-label">Total Hari Kerja</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="ttl_hari" name="ttl_hari" value="<?= set_value('ttl_hari')?>">
										<?= form_error('ttl_hari','<small class="text-danger pl-2">','</small>') ?>
									</div>
									<label for="ttl_hari" class="col-md-1 col-form-label" style="margin-left:-25px">Hari</label>
								</div>

								<div class="form-group row">
									<label for="sakit" class="col-md-6 col-form-label">Sakit</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="sakit" name="sakit" value="<?= set_value('sakit')?>">
										<?= form_error('sakit','<small class="text-danger pl-2">','</small>') ?>
									</div>
									<label for="sakit" class="col-md-1 col-form-label" style="margin-left:-25px">Hari</label>
								</div>

								<div class="form-group row">
									<label for="izin" class="col-md-6 col-form-label">izin</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="izin" name="izin" placeholder="" value="<?= set_value('izin')?>">
										<?= form_error('izin','<small class="text-danger pl-2">','</small>') ?>
									</div>
									<label for="izin" class="col-md-1 col-form-label" style="margin-left: -25px">Hari</label>
								</div>

								<div class="form-group row">
									<label for="alpa" class="col-md-6 col-form-label">Alpa</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="alpa" name="alpa" placeholder="" value="<?= set_value('alpa')?>">
										<?= form_error('alpa','<small class="text-danger pl-2">','</small>') ?>
									</div>
									<label for="alpa" class="col-md-1 col-form-label" style="margin-left: -25px">Hari</label>
								</div>

								<div class="form-group row">
									<label for="atelat" class="col-md-6 col-form-label">Absen Terlambat</label>
									<div class="col-md-3">
										<input type="number" class="form-control" id="atelat" name="atelat" placeholder="" value="<?= set_value('atelat')?>">
										<?= form_error('atelat','<small class="text-danger pl-2">','</small>') ?>
									</div>
									<label for="atelat" class="col-md-1 col-form-label" style="margin-left: -25px">Hari</label>
								</div>								
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<center><button type="submit" class="btn btn-success" style="width: 100%">Save</button></center>	
					</div>				
					
			</form>
				</div>
			</div>
		</div>		
	</div>
	
</body>
	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/style/dependent-combo.js"></script>

</html>