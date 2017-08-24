<?php

require 'config.php';
//$prod_id= $_POST['prod_id'];
//$_SESSION['prod_id'] = $_POST['id'];
//echo $_SESSION['prod_id'];
$orderQuery = "SELECT * FROM products WHERE pID = {$_POST['id']}";
$orderResult = mysqli_query($conn, $orderQuery);

$arr = mysqli_fetch_assoc($orderResult);

echo json_encode($arr);
?>