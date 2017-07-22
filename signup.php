<!Doctype html>
<html>
<head>
	<title>sign up</title>
	<meta charset utf ="8">
		<link href="css/client.css" rel="Stylesheet">
		<link href="css/bootstrap.min.css" rel="Stylesheet">
		<link href="css/bootstrap.css" rel="Stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="Stylesheet">
		<style>
		.signup-container{
			margin-top:2px;
			}

			.signup-container form{
				padding:5%;
				color:#6495ED;
				font-size:15px;
			}

			.signup-container input{
			 padding-left:50px;
			}
		</style>
</head>
<body>
<div class="modal-header">
<button type="button" class="close"style="color:red;" data-dismiss="modal" aria-hidden="true">&times;</button> 
<h3 class="modal-title" style="color:red;">Please sign up here</h3>
</div>
	<div class = "row signup-container">
		<div class="col-sm-12">
			<form method="POST" action="process.php">	
				<label>First Name:</label>
				<input type="text" class="form control" name="fName" placeholder="Enter First Name" style="margin-left:20%;" required><br/>
				
				<label>Last Name:</label>
				<input type="text" class="form control" name="lName" placeholder="Enter Last Name" style="margin-left:20%;" required><br/>
				
				<label>Gender:</label>
				<select name="gender" style="margin-left:24%;padding-left:13%;padding-right:14%;" required>
					<option value="" selected>--select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select><br/>
				
				<label>Email Address:</label>
				<input type="Email" class="form control" name="emailAddress" placeholder="Example2323@mail.com" style="margin-left:15%;" required><br/>
				
				<label>Phone_No:</label>
				<input type="tel" class="form control" name="phoneNo" placeholder="Enter your phone number" style="margin-left:20%;" required><br/>
				
				<label>User Name:</label>
				<input type="text" class="form control" name="uName" placeholder="Enter your username" style="margin-left:19%;" required><br/>
				
				<label>Password:</label>
				<input type="password" class="form control" name="password" placeholder="Enter your password" style="margin-left:20%;" required><br/>
				
				<label>Confirm Password:</label>
				<input type="password" class="form control" name="confirmPassword" placeholder="confirm your password" style="margin-left:10%;" required><br/>
				<hr>
				
				<button type="submit" style="margin-left:80%;" class="btn btn-warning" name="register" value="REGISTER">
				<span class="glyphicon glyphion-save"></span>&nbsp;&nbsp;REGISTER 
				</button>
			</form>
		</div>
	</div>
</body>
</html>