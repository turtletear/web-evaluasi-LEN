<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Admin</title>

	<!-- CSS only -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/style/style1.css">


</head>

<body>
    <script type="text/javascript">
        localStorage.removeItem('stat');
        localStorage.removeItem('stat2');
    </script>
    
    <div class="container">
        <?php $this->load->view('navbar_admin.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid" style="background-color: #CFDDFF; height: auto;">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-6 mr-1 mt-5 ml-1 mb-3" style="background-color: white; border-radius: 5px;">
                        <?= $this->session->flashdata('signSucc');?>	    
                        <div class="mt-4 mb-2"> 
                                <center>
                                    <h4>
                                        Create Atasan Account
                                    </h4>
                                </center>
                            </div>

                            <div class="p-4">
                                <form action="<?php echo site_url('C_sign_up_atasan/add'); ?>" method="post" class="form-signin">
                                    
                                    <div class="form-group mb-3">
                                        <select name="divisi" id="divisi" class="form-control" style="width: 100%;">
                                            <option disabled selected value>-- Divisi / Unit Bisnis --</option>
                                        </select>
                                        <?= form_error('divisi','<small class="text-danger pl-2">','</small>') ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <select name="bagian" id="bagian" class="form-control" style="width: 100%;">
                                            <option disabled selected value>-- Bagian / Unit Kerja --</option>
                                        </select>
                                        <?= form_error('bagian','<small class="text-danger pl-2">','</small>') ?>
                                    </div>

                                    <div class="form-group mb-3">
                                        <input name="admUK" id="admUK" disabled placeholder="Admin Unit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>

                                    <hr>
                                
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
                        </div> <!-- tutup col -->
                        
                    </div>

                </div>
            </div>    
        </div>
    
	</div>
	
	<!-- JS, Popper.js, and jQuery -->
	
</body>
<script src="<?= base_url() ?>assets/style/dependent-combo.js"></script>
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var site_url = "<?= site_url()?>"
		getDivisi()
        getBagian2()
        getAdmUK()
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>