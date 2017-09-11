<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.form-style{
		background-color: rgba(255,255,255,0.7);
		padding: 20px;		

	}
	</style>
</head>
<body style="background-color: #1b5783;">
	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-xs-offset-4 col-xs-3">
				<div class="row form-style">	
					<form action="" method="post">
						<div class="form-group">
					            <label for="email">Email</label>
					            <input type="Email" class="form-control" id="email" placeholder="Email address" name="email">
					    </div>
					    <div class="form-group">
					            <label for="password">Password</label>
					            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
					    </div>
					    <input type="submit" class="btn btn-primary" name="update" value="Update">
					</form>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>