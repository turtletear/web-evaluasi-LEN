<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Admin</title>

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
        localStorage.removeItem('stat');
        localStorage.removeItem('stat2');
    </script>
    
    <div class="container">
    <?php $this->load->view('navbar_admin.php') ?>
		<div class="container main_bgr2" style="height: 86%">
            <div class="row div_center" style="margin: auto; display: block;">        
                <div class="login_area2" style="margin-top: 30px; margin-bottom: 10px;">
                    <div class="container-fluid">
                        <div class="row div_center">
                            <h3>Create Admin Unit Account</h3>
                            <br>
                        </div>
                        
                        <div class="row div_center id_atas">
                            <form action="#" method="post" class="form-signin">
                                
                                <div class="form-group mb-3">
                                    <input name="nik" placeholder="NIK" value="<?= set_value('nik')?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('nik','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="name" placeholder="Full name" value="<?= set_value('name')?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('name','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="password" placeholder="Password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('password','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="conf_password" placeholder="Confirm Password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('conf_password','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                
                                <button type="submit" class="btn btn-info" style="display: block; text-align: center; margin: auto;">Sign Up</button>
                                
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>	
	</div>
	
</body>

</html>