<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style1.css">
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
                        
                        <div class="row div_center" style="margin-top: 150px;">
                            <h3><font color="#888888"> Login sebagai : </font> </h3>
                        </div>
                        <button class="btn btn-secondary btn-lg" onclick="hide_admin()"> atasan</button>
                        <button class="btn btn-info btn-lg" onclick="hideshow_admin()"> admin</button>
                        
                        <div id="inp_admin" class="row div_center" style="width: 50%; margin-top: 15px; display: none;">
                            <div class="input-group mb-3">
                                <input placeholder="password" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-info btn-lg" id="btn_nxt" style="display: none;"> login</button>
                        </div>
                        
                        
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
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>