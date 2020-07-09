<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>

	<link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    
	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>
		<div class="container pt-3" style="background-color: #E7E7E7">

			<div class="container main_bgr_input" style="width: 75%">
			<?= $this->session->flashdata('saveEmp');?>	
				<div class="row" style="margin: 5px 10px">        
					<h3>Identitas Karyawan</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<form method="POST" action="<?= base_url("C_tambah_admin/newEntry")?>" style="margin: 10px 10px; width: 100%">
					<div class="form-group row">
						<label for="nama" class="col-md-4 col-form-label">Nama Atasan</label>
						<div class="col-md-8">
							<select name="combo_atasan" id="" class="form-control" style="width: 100%;">
								<option disabled selected value>Nama Atasan</option>
								<?php foreach($atasan as $row) {
									echo '<option value="'.$row['id_atasan'].'">'.$row['nama'].'</option>';
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
						<label for="divisi" class="col-md-4 col-form-label">Divisi / Unit Bisnis</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi" value="<?= set_value('divisi')?>">
							<?= form_error('divisi','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="bagian" class="col-md-4 col-form-label">Unit Kerja / Bagian</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian" value="<?= set_value('bagian')?>">
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
					<button type="submit" class="btn btn-success" style="margin-left: 2%">Save</button>
					</form>
				</div>
			</div>
		</div>		
	</div>
	
</body>

</html>