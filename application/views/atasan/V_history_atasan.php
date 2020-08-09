<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>History Penilaian Atasan</title>

	<link rel="stylesheet" href="<?= base_url()?>/assets/style/style1.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">

	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url()?>/assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<!-- NAVBAR  -->
        <?php $this->load->view('navbar.php') ?>
		<div class="main_bgr2 container">
			<h6 class="ml-1">
				Hello <?= $this->session->userdata('sessAtasan')['nama_atasan'] ?>
			</h6>	
		<form action="" method="">
			<?= $this->session->flashdata('evalAt');?>	
			<div class="row" style=" margin-bottom: 10px;">
					
					<div class="col-md-3">
						<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
					</div>
				</div>
			</form>	  

			<div class="row">
				<div class="col-md-12">		            
					<div class="table-responsive" style="background-color: white;">		                
						<table class="table table-striped" id="myTable" style="margin-bottom: 0px;">
							<thead class="thead-dark" style=" text-align: center;">
								<tr>
									<th scope="col">Nama</th>
									<th scope="col">NIK</th>
									<th scope="col">Nilai</th>
									<th scope="col">Tanggal Penilaian</th>
									<th scope="col"></th>
								</tr>
							</thead>
							
							<?php if ($listEmp) { ?>
								<tbody>
								<!-- start php loop here.. -->
								<?php foreach($listEmp as $emp): ?>
									<tr>
										<td><?= $emp['nama']?></td>
										<td style=" text-align: center;"><?= $emp['nik']?></td>
										<td style=" text-align: center;"><?= $emp['nilai_hasil']?>%</td>
										<td style=" text-align: center;"><?= $emp['date_fill']?></td>
										<td style=" text-align: center;"><a href="<?= base_url(); ?>C_detail_atasan/index/<?= $emp['id_karyawan'] ?>"> <button class="btn btn-primary"> Detail </button> </td>
									</tr>
								<?php endforeach ?>
								<!-- end php loop here.. -->
							</tbody>
								
							<?php }
							else {?>
								<tbody>
									<tr>
										<td class="text-center text-danger" colspan="4">
											<h5>
												No employees have been graded	
											</h5> 
										</td>
									</tr>
								</tbody>
							<?php }?>

						
					</table>
					
				</div>
				
			</div>
			
		</div>
		</div>
	</div>
    <!-- end main content -->

    <script>
		function myFunction() {
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
	</script>

</body>

</html>