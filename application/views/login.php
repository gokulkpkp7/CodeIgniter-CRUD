<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.form-style{
		background-color: rgba(255,255,255);
		padding: 20px;
		border: 1px solid #e7d4f1;
			

	}
	</style>
</head>
<body style="background-color: #ffffff;">
	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-xs-offset-4 col-xs-3" style="box-shadow: -15px 20px 10px -15px;">
				<div class="row form-style">	
					<form action="profile" method="post">
						<div class="form-group">
					            <label for="email">Email</label>
					            <input type="Email" class="form-control" id="email" placeholder="Email address" name="email">
					    </div>
					    <div class="form-group">
					            <label for="password">Password</label>
					            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
					    </div>
					    <input type="submit" class="btn btn-primary" name="login" value="Login">
					</form>
				</div>	
			</div>
		</div>
	</div>

	<?php
		if($value == 1){

			echo "<script>
				$(document).ready(function(){
					alert('Invalid Email or Password !');
				});
			</script>";
		}
	?>

	<script>
		$(document).ready(function(){
			$("#email").focus();
		});
	</script>
</body>
</html>