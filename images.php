<!DOCTYPE html>
<html>
<head>
	<title>istreams client app</title>
	<link href="css/client.css" rel="Stylesheet">
	<link href="css/bootstrap.min.css" rel="Stylesheet">
	<link href="css/bootstrap.css" rel="Stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="Stylesheet">	
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
	<script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</head>

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

<?php

include("config.php");

$imagesql = "SELECT*FROM products";
$resulte = mysqli_query($conn,$imagesql);

echo "<table border='1' cellpadding = '3'>";

while($row = mysqli_fetch_array($resulte)){
	if( $row["pID"]==4||$row["pID"]==8||$row["pID"]==10){
	echo "<tr>";
	echo "<td>";echo $row["pID"];echo"</td>";
	echo "<td>";echo $row["productName"];echo"</td>";
	echo "<td>";?><img src="<?php echo $row["productImage"];?>" height="100" width="100"><?php echo "</td>";
	echo "<td>";echo $row["productDesc"];echo"</td>";
	echo"</tr>";
}
}
echo "</table>";
?>
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
</div>
</body>

</html>
