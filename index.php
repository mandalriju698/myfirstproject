<?php

include "logic.php";



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--bootstrap css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!--bootstrap js-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

<!-- Google front-->
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

<!--font awesome-->
<script src="https://kit.fontawesome.com/bcacdc06e3.js" crossorigin="anonymous"></script>

<!--my stylesheet-->
<link rel="stylesheet"  href="style.css">
	<title>covid-19</title>


	

</head>
<body>
	<div class="container-fluid bg-light p-5 text-center my-3">
		<h1>Covid-19 Tracker</h1>
		<h5 class="text-muted">An opensource project to keep track of all the COVID-19 cases around the world.</h5>
		<div class="container my-5">
			<div class="row text-center">
				<div class="col-4 text-warning">
					<h5>confirmed</h5>
					<?php echo $total_confirmed;?>
				</div>
				
				<div class="col-4 text-success">
					<h5>Recovered</h5>
					<?php echo $total_recovered;?>
				</div>
				<div class="col-4 text-danger">
					<h5>Deceased</h5>
					<?php echo $total_deaths;?>
				</div>
				
			</div>
			

		</div>

		<div class="container bg-light p-3 my-3 text-center">
			<h5 class="text-info">"prevention is the cure."</h5>
			<p class="text-muted">"stay indoors stay safe"</p>
			
		</div>
		
	</div>
	<div class="container-fluid">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">countries</th>
					<th scope="col">confirmed</th>
					<th scope="col">recovered</th>
					<th scope="col">deceased</th>

				</tr>
			</thead>
			<tbody>
				<?php
               foreach ($data as $key => $value) {
               	$increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];
               
				?>

                 <tr>
                 	<th><?php echo $key; ?></th>
                 	<td>
                 		<?php echo $value[$days_count]['confirmed'];?>
                         <?php if($increase!=0){ ?>

                 		<small class="text-danger pl-3" ><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                       <?php
                   }

                   ?>

                 	</td>
                 	<td>
                 		<?php echo $value[$days_count]['recovered'];?>


                 	</td>
                 	<td>
                 		<?php echo $value[$days_count]['deaths'];?>


                 	</td>

                 </tr>


                 <?php
             }

             ?>
			</tbody>

		</table>
		
	</div>
<footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted">copyright &copy 2021.<a href="https:://packetcode.in">packetcode</a></span>
      </div>
    </footer>
</body>
</html>