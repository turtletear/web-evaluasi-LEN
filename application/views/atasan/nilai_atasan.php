<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nilai Atasan</title>

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/style1.css">

	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url() ?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="container" style="background-color: #E7E7E7">
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
		                            <td>Jacob</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">NIK PKWT</th>
		                            <td>18001292</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">Divisi / Unit Bisnis</th>
		                            <td>Divisi Penjamin Mutu / Sistem dan K3L</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">Unit Kerja / Bagian</th>
		                            <td>Divisi Penjamin Mutu / Sistem dan K3L</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">Jabatan</th>
		                            <td>Crush</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">Periode Kontrak</th>
		                            <td>18-02-2020  -  18-02-2020</td>
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
					<form style="margin: 0px 10px; width: 100%">
						<h4>Innovation</h4>
						<div class="form-group row form_eval">
							<label for="nama" class="col-md-4 col-form-label">Inisiatif</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Daya Kreativitas</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="divisi" class="col-md-4 col-form-label">Problem Solving</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<h4>Integrity</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Tanggung Jawab</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Komitmen Kepada Perusahaan</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Etika Kerja</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<h4>Customer Oriented</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Adaptasi Kerja</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Pelayanan Terhadap Unit Kerja / Pihak Eksternal</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kemampuan Melaksanakan Tugas</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<h4>Team Work</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Penyesuaian Diri</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Kemampuan Berkomunikasi</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Kerja Sama</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<h4>Professionalism</h4>
						<div class="form-group row form_eval">
							<label for="bagian" class="col-md-4 col-form-label">Disiplin</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="jabatan" class="col-md-4 col-form-label">Sistematika Kerja</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
						<div class="form-group row form_eval">
							<label for="nik" class="col-md-4 col-form-label">Hasil Pekerjaan</label>
							<div class="col-md-4">
								<select class="form-control">
									<option selected>Choose...</option>
									<option value="1">1 (Sangat Kurang)</option>
									<option value="2">2 (Kurang)</option>
									<option value="3">3 (Cukup)</option>
									<option value="4">4 (Baik)</option>
									<option value="5">5 (Sangat Baik)</option>
								</select>
							</div>
						</div>
				   </form>
				   <button type="button" class="btn btn-success" style="margin-left: 540px">Save</button>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>