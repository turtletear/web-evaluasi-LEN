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
	<div class="container">
		<div class="container main_bgr2" style="height: 100%">
            <div class="row div_center" style="margin: auto; display: block;">        
                <div class="login_area2" style="margin-top: 75px; margin-bottom: 10px;">
                    <div class="container-fluid">
                        <div class="row div_center" style="display: block;">
                            <h3>Create an Account</h3>
                            <br>
                            <?php if($this->session->flashdata('Success')) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['Success']; ?>
                                </div>
                            <?php } ?>

                            <?php if($this->session->flashdata('Failed')) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['Failed'];  ?>
                                </div>
                            <?php } ?> 
                        </div>
                         
                        <div class="row div_center id_atas" style="margin:auto; margin-top: 20px;">
                            <form action="<?php echo site_url('C_sign_up_admin/add'); ?>" method="post" class="form-signin">
                                <div class="form-group mb-3">
                                    <input name="username" placeholder="Username" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('username','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                <div class="form-group mb-3">
                                	<input name="password" placeholder="Password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('password','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="confirm_password" placeholder="Confirm Password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <label><?= form_error('confirm_password','<small class="text-danger pl-2">','</small>') ?></label>
                                </div>
                            	<button type="submit" class="btn btn-info" style="display: block; text-align: center; margin: auto;">Sign Up</button>
                                <p class="mt-5 mb-3 text-muted">Already have an account? <a href="<?php echo site_url('C_landing_page'); ?>">Log In</a></p> 
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>	
	</div>
	
</body>

</html>