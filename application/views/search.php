<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-color: #f1f1f1;">
	<div class="container" style="margin-top: 100px;">
		<div class="row" >
			<div class="col-xs-offset-3 col-xs-5" style="box-shadow: 0 0 10px #000; background-color: white;">
				<form action="" method="post" style="padding: 40px;">
					<div class="row">
						<div class="col-xs-6">						
							<label for="name" style="color: #00d0ff">Search term:</label>
							<input type="text" name="term" required  class="form-control form-group" autofocus style="font-size: 15px; border-radius: 0; ">
						</div>
						<div class="col-xs-offset-1 col-xs-4">
							<label for="name" style="color: #00d0ff">Search by:</label>
							<select class="form-control form-group" name="drop" style="border-radius: 0;">
							    <option  value="firstname">Firstname</option>
							    <option  value="lastname">Lastname</option>
							    <option  value="email">Email</option>
							    <option  value="phone">Phone</option>
							</select>
						</div>
					</div>
					<div class="row" style="padding-top: 5px;">
						<div class="col-xs-12">
							<input class="btn btn-primary" type="submit" name="submit" value="Search">
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>

	<?php
		if($value == 1){

			echo "<script>
				$(document).ready(function(){
					alert('No results found !');
				});
			</script>";
		}
	?>
</body>
</html>