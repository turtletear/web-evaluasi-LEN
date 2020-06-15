<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Atasan</title>

	<link rel="stylesheet" href="<?= base_url()?>assets/style/style1.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">

	<!-- JS, Popper.js, and jQuery -->
	<script src="<?= base_url()?>assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
	    <div class="container main_bgr2" style="height: 100%">
		    <form action="" method="">
		        <div class="row" style=" margin-bottom: 10px;">
		            <div class="col-md-6">    
		            	<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
		            </div>
		        </div>
		    </form>	        
		    <div class="row">
		        <div class="col-md-12">		            
		            <div class="table-responsive" style="background-color: white;">		                
		                <table class="table table-striped" id="myTable" style="margin-bottom: 0px; text-align: center;">
		                    <thead class="thead-dark">
		                    <tr>
		                        <th scope="col">Nama</th>
		                        <th scope="col">NIK</th>
		                        <th scope="col">Absensi</th>
		                        <th scope="col"></th>
		                    </tr>
		                    </thead>
		                    <tbody>
		                    <!-- start php loop here.. -->
		                    <tr>
		                        <td>Mark</td>
		                        <td>18001191</td>
		                        <td>80%</td>
		                        <td> <button class="btn btn-primary"> + Nilai </button> </td>
		                    </tr>
		                    <tr>
		                        <td>Jacob</td>
		                        <td>18002291</td>
		                        <td>90%</td>
		                        <td> <button class="btn btn-primary"> + Nilai </button> </td>
		                    </tr>
		                    <tr>
		                        <td>Harry</td>
		                        <td>18003393</td>
		                        <td>-</td>
		                        <td> <button class="btn btn-primary"> + Nilai </button> </td>
		                    </tr>
		                    <tr>
		                        <td>Jacob</td>
		                        <td>18002291</td>
		                        <td>-</td>
		                        <td> <button class="btn btn-primary"> + Nilai </button> </td>
		                    </tr>
		                    <tr>
		                        <td>Harry</td>
		                        <td>18003393</td>
		                        <td>85%</td>
		                        <td> <button class="btn btn-primary"> + Nilai </button> </td>
		                    </tr>
		                    <!-- end php loop here.. -->
		                    </tbody>
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