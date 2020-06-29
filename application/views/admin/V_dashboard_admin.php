<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT LEN</title>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">
</head>
<body>
    
    <div class="container">
        <!-- -----------------------BATAS SUCI----------------------- -->

        <!-- NAVBAR  -->
        <?php $this->load->view('navbar_admin.php') ?>

        <!-- start main content here..-->
        <div class="container main_bgr_dash">
            
            <div class="row">
                <div class="col-md-12"> 
                    <h4>Hasil Evaluasi Penilaian Karyawan</h4>
                </div>
            </div>

        <form action="" method="">
            <div class="row" style=" margin-bottom: 10px;">
                <div class="col-md-3">
                <input class="form-control" type="text" id="myInput" onkeyup="searchName()" placeholder="Search for names.." title="Type in a name">
                </div>
                <!-- <div>
                    <button class="btn btn-info" type="submit">search</button>
                </div> -->
                <div class="col-md-7" style="text-align: right; margin-left: 180px;">
                    <a href="<?= site_url('C_tambah_admin'); ?>" class="btn btn-success">+ New</a>
                </div>
            </div>
        </form>
            
            <div class="row">
                <div class="col-md-12"> 
                    
                    <div class="table-responsive" style="background-color: white;">
                        
                        <table class="table table-striped" id="myTable" style="margin-bottom: 0px;">
                            <thead class="thead-dark"  style="text-align: center;">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Hasil Evaluasi</th>
                                <th scope="col">Absensi</th>
                                <th scope="col">Hasil Evaluasi Penilaian</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- start php loop here.. -->
                            <?php $no = 1;
                            foreach ($hasilevaluasi as $value) { ?>
                                <tr>
                                    <td><?= $value['nama']; ?></td>
                                    <td style="text-align: center;"><?= $value['nik']; ?></td>
                                    <td style="text-align: center;"><?= $value['nilai_kinerja']; ?>%</td>
                                    <td style="text-align: center;"><?= $value['nilai_produktivitas']; ?>%</td>
                                    <td style="text-align: center;"><?= $value['nilai_hasil']; ?>%</td>
                                    <?php if ($value['status'] == '-') { ?>
                                        <td>
                                            <a href="<?php echo site_url('C_detail_admin/index/' . $value['id_karyawan']); ?>" class="btn btn-info" id="detail" style="margin-right: 20px;">Detail</a>
                                            <a href="<?php echo site_url('C_kesimpulan_penilaian/index/' . $value['id_karyawan']); ?>" class="btn btn-primary" id="nilai">+ Nilai</a>
                                        </td>
                                    <?php } else {?>
                                        <td>
                                            <a href="<?php echo site_url('C_detail_admin/index/' . $value['id_karyawan']); ?>" class="btn btn-info" id="detail">Detail</a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                            <!-- end php loop here.. -->
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
        <!-- end main content -->

    <script>
        function searchName() {
		    var input, filter, table, tr, td, i, txtValue;
		    input = document.getElementById("myInput");
		    filter = input.value.toUpperCase();
		    table = document.getElementById("myTable");
		    tr = table.getElementsByTagName("tr");
		    for (i = 0; i < tr.length; i++) {
		        td = tr[i].getElementsByTagName("td")[0];
	            if (td) {
	                txtValue = td.textContent || td.innerText;
		            if (txtValue.toUpperCase().indexOf(filter) > -1) {
		                tr[i].style.display = "";
		            } else {
		                tr[i].style.display = "none";
		            }
		        }       
		    }
		}
        // end function
    </script>
    
    <script src="<?= base_url()?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>