<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT LEN</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/style1.css">
</head>
<body>
    
        <!-- -----------------------BATAS SUCI----------------------- -->


        <!-- start main content here..-->
        <div class="container main_bgr">
            <div class="row div_center">
                
                <div class="login_area" style="margin-top: 60px; margin-bottom: 53px;">
                    
                    <div class="container-fluid">
                        <div class="row div_center">
                            <h4>Halaman Web</h4> 
                        </div>
                        
                        <div class="row div_center">
                            <h1><font color="#888888"> PKWT </font> </h1>
                        </div>
                        
                        <div class="row div_center" style="margin-top: 120px;">
                            <h3><font color="#888888"> Login sebagai : </font> </h3>
                        </div>

                        <div class="row div_center">
                            
                            <a href="<?php echo site_url('C_identitas_atasan'); ?>" class="btn btn-secondary btn-lg" onclick="hide_admin()">atasan</a>
                            
                            <button class="btn btn-info btn-lg" onclick="hideshow_admin()">admin</button>                                
                        </div>
                       <br>
                       <?php if($this->session->flashdata('Failed')) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['Failed'];  ?>
                            </div>
                        <?php } ?>
                        
                        <form action="<?php echo site_url('C_landing_page/check'); ?>" method="post">
                            <div id="inp_admin" class="row div_center" style="width: 50%; margin-top: 10px; display: none;">
                                <div class="input-group mb-3">
                                    <input name="password" id="password" placeholder="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-info btn-lg" id="btn_nxt" style="display: none;">login</button>
                            </div>
                        </form>
                       
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- end main content -->


    <script>
        function hideshow_admin() {
            var x = document.getElementById("inp_admin");
            var y = document.getElementById("btn_nxt");
            if (x.style.display === "none" && y.style.display === "none") {
                x.style.display = "block";
                y.style.display = "inline";
            } else {
                x.style.display = "none";
                y.style.display = "none";
            }
        }
        function hide_admin() {
            var x = document.getElementById("inp_admin");
            var y = document.getElementById("btn_nxt");
            x.style.display = "none";
            y.style.display = "none";
        }
    </script>
    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>