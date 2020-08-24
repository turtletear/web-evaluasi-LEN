<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PT LEN</title>
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/style/style1.css">
</head>
<body>
	
		<!-- -----------------------BATAS SUCI----------------------- -->
		<!-- start main content here..-->
		<div class="container main_bgr">
			<div class="row div_center">
				
				<div class="login_area2" style="margin-top: 5%; margin-bottom: 50%; height: auto;">
					
					<div class="container-fluid">
						<div class="row div_center">
							<h2>Halaman Web</h2> 
						</div>
						
						<div class="row div_center">
							<h1><font color="#888888"> PKWT </font> </h1>
						</div>

						<div>
							<img src="<?= base_url()?>/assets/img/logo.png" style="height: 30%; width: 30%;">
						</div>
						
						<div class="row div_center" style="margin-top: 5%;">
							<h3><font color="#888888"> Login sebagai : </font> </h3>
						</div>

						<div class="row div_center">
														
							<button class="btn btn-secondary btn-lg" data-target="#myModal1" data-toggle="modal" style="margin-bottom: 2%" >atasan</button>
							<div class="dropdown">
							    <button class="btn btn-lg btn-info dropdown-toggle" type="button" data-toggle="dropdown">admin</button>
							    <ul class="dropdown-menu">
							      	<li><a href="#"  data-toggle="modal" data-target="#myModal3" >Admin Unit Bagian</a></li>
							      	<li><a href="#"  data-toggle="modal" data-target="#myModal2" >Admin SDM</a></li>
							    </ul>
							</div>		
							<!-- <button class="btn btn-info btn-lg" data-target="#myModal2" data-toggle="modal" >admin</button>         -->
						</div>				   
					</div>
					
				</div>

				<!-- The Modal Atasan Karyawan-->
                <div class="modal fade" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <br>
                                <h2> Log in Atasan Karyawan </h2>
                                <br>
                                <?= $this->session->flashdata('failed_atasan');?>
                                <form action="<?php echo site_url('C_landing_page/add'); ?>" method="post">
                                    <div class="row div_center" style="width: 50%;">
                                        <div class="form-group mb-3">
                                            <input name="nik_atasan" placeholder="NIK" type="text" value="<?= set_value('nik_atasan') ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            <label><?= form_error('nik_atasan','<small class="text-danger pl-2">','</small>') ?></label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input name="pass_atasan" placeholder="Password" type="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            <label><?= form_error('pass_atasan','<small class="text-danger pl-2">','</small>') ?></label>
                                        </div>
                                    </div>

                                    <div>
                                        <button style="margin-bottom: 30px;" type="submit" class="btn btn-info btn-lg" >Log in</button>
                                        <br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <!-- The Modal Login Admin SDM -->
				<div class="modal fade" id="myModal2">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<!-- Modal body -->
							<div class="modal-body">
								<br>
								<h2> Log in Admin SDM</h2>
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

								
								<form action="<?php echo site_url('C_landing_page/check'); ?>" method="post">
									<div class="row div_center" style="width: 50%;">
										<div class="form-group mb-3">
											<input name="username" id="username" placeholder="Username" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
											<label><?= form_error('username','<small class="text-danger pl-2">','</small>') ?></label>
										</div>
										<div class="form-group mb-3">
											<input name="password" id="password" placeholder="Password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
											<label><?= form_error('password','<small class="text-danger pl-2">','</small>') ?></label>
										</div>
									</div>

									<div>
										<button style="margin-bottom: 30px;" type="submit" class="btn btn-info btn-lg" >Log in</button>
										<!-- <p id="signup" class="mt-5 mb-3 text-muted">Don't have an account? <a href="<?php echo site_url('C_sign_up_admin');?>">Sign Up</a></p> -->
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
				<!-- End Modal -->

				<!-- The Modal Admin Unit-->
                <div class="modal fade" id="myModal3">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <br>
                                <h2> Log in Admin Unit Bagian </h2>
                                <br>
                                <?= $this->session->flashdata('failed_admUnit');?>
                                <form action="<?php echo site_url('C_landing_page/login'); ?>" method="post">
                                    <div class="row div_center" style="width: 50%;">
                                        <div class="form-group mb-3">
                                            <input name="nik_admUnit" placeholder="NIK" type="text" value="<?= set_value('nik_admUnit') ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            <label><?= form_error('nik_admUnit','<small class="text-danger pl-2">','</small>') ?></label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input name="pass_admUnit" placeholder="Password" type="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            <label><?= form_error('pass_admUnit','<small class="text-danger pl-2">','</small>') ?></label>
                                        </div>
                                    </div>

                                    <div>
                                        <button style="margin-bottom: 30px;" type="submit" class="btn btn-info btn-lg" >Log in</button>
                                        <br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Modal -->
			</div>
		</div>
		
		<!-- end main content -->


	<script src="<?= base_url() ?>/assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>