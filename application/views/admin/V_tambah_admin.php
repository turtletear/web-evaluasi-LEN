<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>

	<link rel="stylesheet" href="<?= base_url()?>assets/style/style1.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    
	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url() ?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>
		<div class="container" style="background-color: #E7E7E7">
			<div class="container main_bgr_input" style="width: 75%">
				<div class="row" style="margin: 5px 10px">        
				   <h3>Identitas Karyawan</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<form style="margin: 10px 10px; width: 100%">
						<div class="form-group row">
							<label for="nama" class="col-md-4 col-form-label">Nama Lengkap</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="nama" placeholder="Nama lengkap">
							</div>
						</div>
						<div class="form-group row">
							<label for="nik" class="col-md-4 col-form-label">NIK PKWT</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="nik" placeholder="NIK PKWT">
							</div>
						</div>
						<div class="form-group row">
							<label for="divisi" class="col-md-4 col-form-label">Divisi / Unit Bisnis</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="divisi" placeholder="Divisi">
							</div>
						</div>
						<div class="form-group row">
							<label for="bagian" class="col-md-4 col-form-label">Unit Kerja / Bagian</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="bagian" placeholder="Bagian">
							</div>
						</div>
						<div class="form-group row">
							<label for="jabatan" class="col-md-4 col-form-label">Jabatan</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
							</div>
						</div>
						<div class="form-group row">
							<label for="nik" class="col-md-4 col-form-label">Periode</label>
							<div class="col-md-4">
								<input class="form-control" type="date" id="start_periode">
							</div>
							<div class="col-md-4">
								<input class="form-control" type="date" id="end_periode">
							</div>
						</div>
				   </form>
				</div>
				<div class="row" style="margin: 5px 10px">
					<h3>Absensi</h3>
				</div>
				<div class="row" style="margin: 0px 10px">
					<form style="margin: 10px 10px; width: 100%">
						<div class="form-group row">
							<label for="sakit" class="col-md-4 col-form-label">Sakit</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="sakit" placeholder="">
							</div>
							<label for="sakit" class="col-md-4 col-form-label" style="margin-left: -25px">Hari</label>
						</div>
						<div class="form-group row">
							<label for="nik" class="col-md-4 col-form-label">Izin</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="izin" placeholder="">
							</div>
							<label for="izin" class="col-md-4 col-form-label" style="margin-left: -25px">Hari</label>
						</div>
						<div class="form-group row">
							<label for="divisi" class="col-md-4 col-form-label">Alpa</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="alpa" placeholder="">
							</div>
							<label for="alpa" class="col-md-4 col-form-label" style="margin-left: -25px">Hari</label>
						</div>
						<div class="form-group row">
							<label for="bagian" class="col-md-4 col-form-label">Absen Terlambat</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="terlambat" placeholder="">
							</div>
							<label for="terlambat" class="col-md-4 col-form-label" style="margin-left: -25px">Hari</label>
						</div>
				   </form>
				   <button type="button" class="btn btn-success" style="margin-left: 540px">Save</button>
				</div>
			</div>
		</div>		
	</div>
	
</body>

</html>