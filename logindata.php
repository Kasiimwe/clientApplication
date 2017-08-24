
<?php
$usertype=$_POST['select'];
$usernam=$_POST['uname'];
$pass=$_POST['pass'];
//include(connection.php);
require("conection2.php");

$execute = mysql_query("SELECT * FROM accounts"); 
while($row = mysql_fetch_array($execute))
{

//insert the information

if($usertype==$row['User_type']&& $usernam==$row['User_name']&&$pass==$row['Password'])
{
	
	echo "Data inserted <br/>";
	//header("Location:index1.php");
	
	}
if($usertype=='Admin')
{
	header("Location:webapp.php");
	//echo "select usertype <br/>";
	}
	if($usertype=='Supervisor')
{
	header("Location:Grades.php");
	//echo "select usertype <br/>";
	}
	if($usertype=='Student')
{
	header("Location:webapp1.php");
	//echo "select usertype <br/>";
	}
	
if($usernam=='')
{
	
	echo "enter username <br/>";
	}
	if($pass=='')
{
	
	echo "enter password <br/>";
	}
	else{
		echo "enter correct user name and password";
}}
?>