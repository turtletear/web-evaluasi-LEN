<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT LEN</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/style/style1.css">
</head>
<body>


        <!-- -----------------------BATAS SUCI----------------------- -->
    <div class="container">
        <!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid" style="background-color: #CFDDFF;">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-4 div_set_uk mr-1 mt-2 ml-1 mb-2" >
                            <div class="form-group">
                                <label class="font-weight-bold mt-2">Divisi / Unit Bisnis</label>
                                <select multiple class="form-control" id="divisi" name="divisi">

                                </select>
                            </div>
                        </div> <!-- tutup col -->
                        
                        
                        <div class="col-md-6 div_set_uk mr-1 mt-2 ml-1 mb-2" >
                            <label class="font-weight-bold mt-2">Bagian / Unit Kerja</label>
                            <div class="form-group form-check overflow_enable" id="checklist">
                                
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>    
        </div>


        <!-- start main content here..-->
        
        <!-- end main content -->
    </div>
    <script src="<?= base_url() ?>assets/style/dependent-combo.js"></script>
    <script src="<?= base_url()?>assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
		var site_url = "<?= site_url('')?>"
		getDivisi()
        getAllBagian()
	</script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script> -->
</body>
</html>