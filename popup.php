<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Sign up here</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/client.css" rel="Stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
<div class="row">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".demo-popup">Sign Up</button>
<!-- popup box modal starts here -->
<div class="modal fade demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close"style="color:red;" data-dismiss="modal" aria-hidden="true">&times;</button> 
<h3 class="modal-title" style="color:blue;">Please sign up here</h3>
</div>
<div class="modal-body">
	<div class = "row signup-container">
		<div class="col-sm-12">
			<form method="POST" action="login.php">
				
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
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal-->
<!-- popup box modal ends -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</body>
</html>