<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<style>
	
	.form-style{
		background-color: rgba(255,255,255,0.7);
		padding: 20px;
		
		border-radius: 5px;

	}
	h3{
		text-align: center;
	}
</style>
<!--3a91d6-->
<body style="background-color: #1b5783;">
<div class="container">
	<div class="row" style="margin-top: 100px;">
		<div class="col-xs-offset-4 col-xs-4">
			<div class="row form-style" style="height: 400px;">
				<h3>Register</h3>
			    <form action="" method="post">
					<div class="row">
						<div class="col-xs-6">
					        <div class="form-group">
					            <label for="fname">First Name</label>
					            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
					   		</div>
					   	</div>
					   	<div class="col-xs-6">
					   		<div class="form-group">
					            <label for="lastname">Last Name</label>
					            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
					        </div>
					   	</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
					            <label for="email">Email</label>
					            <input type="Email" class="form-control" id="email" placeholder="Email address" name="email">
					        </div>
						</div>	
						<div class="col-xs-6">
							<div class="form-group">
					            <label for="password">Password</label>
					            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
					        </div>
						</div>				
					</div> 
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
					        	<label for="Phone">Phone</label>
					        	<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
					        </div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label for="dob">Date of Birth</label>
								<input type="date" class="form-control" placeholder="Date of birth" id="datepicker" name="dob">
							</div>
						</div>
					</div> 	        	
			        <input type="submit" class="btn btn-primary" name="submit" value="Register">
			    </form>
			</div>
		</div>
		<div class="col-xs-offset-1 col-xs-2">
			<form action="" method="post">
				
			</form>
		</div>
	</div>
</div>


<script>
  $(document).ready(function() {
    $("#datepicker").datepicker({
    	dateFormat: "yy-mm-dd",
    	yearRange: '1965:2000',
    	changeMonth: true,
		changeYear: true
    });
  });
  </script>
</body>
</html>