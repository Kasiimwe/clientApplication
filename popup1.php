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
<link href="css/client1.css" rel="Stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.11.3.js" type="text/javascript"></script>
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
<P></P>
<body>
	<div class="b-container">
		<div class="row head">
			<div class="col-sm-4">
				<img src="images/website-logo.png" class="img-responsive logo" alt="istreams">
			</div>
			
			<div class="col-sm-8">
				<header class="head1">CLIENT MANAGEMENT SYSTEM</header>
			</div>
			
		</div>
				
		<div class="row">
			<fieldset class="main">
		<center>
			<form method="POST" class="form-horizontal">
				
				<table class="table table-primary table-bordered table-responsive"  >
					<tr class="table1">
						<td>
							<label class="control-label" class="label">
								First Name:
							</label>
						</td>
						<td>
						
							<input type="text" class="form control" name="f_name" placeholder="Enter First Name" required>
							<?php // echo "$username"; ?>
						</td>
					</tr>
					<tr class="table1">
						<td>
							<label class="control-label">
								Last Name:
							</label>
						</td>
						<td>
							<input type="text" class="form control" name="l_name" placeholder="Enter Last Name" required>
							
						</td>
					</tr>
						<tr class="table1">
						<td>
							<label class="control-label">
								Gender:
							</label>
						</td>
						<td>
							<select name="Gender" required>
								<option value="" selected>--select--</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
						</td>
					</tr>
						<tr class="table1">
						<td>
							<label class="control-label">
							Email Address:
							</label>
						</td>
						<td>
							<input type="Email" class="form control" name="email" placeholder="Example2323@mail.com" required>
							<?php // echo "$user job"; ?>
						</td>
					</tr>
						<tr class="table1">
						<td>
							<label class="control-label">
								Phone_No:
							</label>
						</td>
						<td>
							<input type="tel" class="form control" name="Phone" placeholder="Enter your phone number" required>
							<?php // echo "$user job"; ?>
						</td>
					</tr>
					<tr class="table1">
						<td>
							<label class="control-label">
								User Name:
							</label>
						</td>
						<td>
							<input type="text" class="form control" name="UserName" placeholder="Enter your username">
							<?php // echo "$user job"; ?>
						</td>
					</tr>
					<tr class="table1">
						<td>
							<label class="control-label">
								Password:
							</label>
						</td>
						<td>
							<input type="password" class="form control" name="Password" placeholder="Enter your password" required>
							<?php // echo "$user job"; ?>
						</td>
					</tr>
					<tr class="table1">
						<td>
							<label class="control-label">
								Confrim_Password:
							</label>
						</td>
						<td>
							<input type="password" class="form control" name="ConfirmPassword" placeholder="confirm your password" required>
							<?php // echo "$user job"; ?>
						</td>
					</tr>
					
						<tr class="table1">
						<td>
						</td>
						<td colspan="2">
						
							<button type="submit" class="btn btn-primary" name="register" value="REGISTER">
							<span class="glyphicon glyphion-save"></span>&nbsp;&nbsp;REGISTER </button>
							<?php // echo "$user job"; ?>
						</td>
					</tr>
					
				</table>
				
			</form>
			</center>
			</fieldset>
		</div>
		<div class ="row foot">
			<div class="row">
				<div class="col-sm-4">
					<a href="index.html"></a>
					<a href="computers.html"></a><br/>
					<a href="disks.html"></a>
					<a href="spare.html"></a><br/>
					<a href="websites.html"></a>
				</div>
				<div class="col-sm-1">
					<a href="https://www.facebook.com/i5treams"><img src="images/facebook.png" alt="facebook" class="img-responsive fimage"></a>
				</div>
				<div class="col-sm-1">
					<a href="https://www.instagram.com/innovationstreams"><img src="images/instagram.png" alt="instagram" class="img-responsive fimage"></a>
				</div>
				<div class="col-sm-1">
					<a href="https://twitter.com/innovationstrms"><img src="images/twitter.png" alt="twitter" class="img-responsive fimage"></a>
				</div>
				<div class="col-sm-1">
					<a href="https://www.linkedin.com/company/innovation-streams-limited"><img src="images/linkedin-128.png" alt="linkedin" class="img-responsive fimage"></a>
				</div>
				<div class="col-sm-4">
					<a href="index.html"></a>
					<a href="computers.html"></a><br/>
					<a href="disks.html"></a>
					<a href="spare.html"></a><br/>
					<a href="websites.html"></a>
				</div>
			</div>
			<div class="row">
			<p style="text-align:center;font-size:20px;padding-top:2%;">&copy Great-Team</p>
			</div>
		</div>
	</div>
</body>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal-->
<!-- popup box modal ends -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</body>
</html>