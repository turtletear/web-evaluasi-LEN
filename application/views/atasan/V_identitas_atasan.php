<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Atasan</title>

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
		<div class="container main_bgr2" style="height: 100%">
            <div class="row div_center" style="margin: auto; display: block;">        
                <div class="login_area2" style="margin-top: 75px; margin-bottom: 53px;">
                    <div class="container-fluid">
                        <div class="row div_center" style="display: block;">
                            <h4>Identitas Atasan</h4> 
                        </div>
                         
                        <div class="row div_center id_atas" style="margin:auto; margin-top: 5px;">
                            <form action="<?php echo site_url('C_identitas_atasan/add'); ?>" method="post" class="form-signin">
                                <div class="input-group mb-3">
                                    <input name="nama_atasan" placeholder="Nama Lengkap" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <?= form_error('nama_atasan','<small class="text-danger pl-2">','</small>') ?>
                                </div>
                                <div class="input-group mb-3">
                                	<input name="nik_atasan" placeholder="NIK" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <?= form_error('nik_atasan','<small class="text-danger pl-2">','</small>') ?>
                                </div>
                            	<button type="submit" class="btn btn-info btn-lg" style="display: block; text-align: center; margin: auto;">Next</button> 
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>	
	</div>
	
</body>

</html>