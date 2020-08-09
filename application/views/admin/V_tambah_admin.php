<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>

	<link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">

	<!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
							</select>

							<?= form_error('divisi','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="bagian" class="col-md-4 col-form-label">Unit Kerja / Bagian</label>
						<div class="col-md-8">
							<select name="bagian" id="bagian" class="form-control" style="width: 100%;">
							<option disabled selected value>-- Bagian --</option>
							</select>

							<?= form_error('bagian','<small class="text-danger pl-2">','</small>') ?>
						</div>
					</div>

					<div class="form-group row">
						<label for="jabatan" class="col-md-4 col-form-label">Jabatan</label>
						<div class="col-md-8">
							<select name="jabatan" id="jabatan" class="form-control" style="width: 100%;">
								<option value disabled selected>-- Jabatan --</option>
								<option value="Pejabat Struktural" <?= set_select('jabatan', 'Pejabat Struktural'); ?> >Pejabat Struktural</option>
								<option value="Staff" <?= set_select('jabatan', 'Staff'); ?> >Staff</option>	
							</select>
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
	<script src="<?= base_url() ?>assets/style/dependent-combo.js"></script>
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var site_url = "<?= site_url()?>"
		getDivisi()
		getBagian()
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html>