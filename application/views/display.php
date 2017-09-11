<!DOCTYPE html>
<html>
<head>
	<title>UserDetails</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>

		html,body{
			height: 100%;
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.profile{

			height: 500px; 
			width: 750px; 
			margin: 0 auto; 
			margin-top: 25px;
			padding: 20px; 
			box-shadow: 0 0 10px #696969;	
		}
		.profile_header{

			background-color: #696969;
			height: 100px; 
			box-shadow: 0 0 5px #000;
		}
	</style>
</head>
<body>
	<div class="container" style="height: 100px; width: 100%;">
		<div class="row profile_header">
			<div class="col-xs-6">
				<h1 style="padding: 20px 0px 0px 125px;"><?php echo "Welcome  " .$this->session->userdata('name') ?></h1>
			</div>
			<div class="col-xs-4">
				<form method="post" action="UserController/logout" style="margin-top: 50px;">
					<input type="submit" class="btn btn-danger" name="logout" value="Logout" style="float: right;">
				</form>
			</div>
		</div>
		<div class="row profile">
			<div class="col-xs-offset-2 col-xs-6" style="font-size: 16px; padding-top: 80px;">
				<?php	
				
					$session = $this->session->all_userdata();
					foreach ($session as $key => $value) {
							
						echo "<b>$key</b>" .":" .$value;
						echo "<br><br>";
					}	
				?>
			</div>
		</div>
	</div>
</body>
</html>