<?php

session_start();
include("config.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';

if (ISSET($_POST['register'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $gender = $_POST['gender'];
    $email = $_POST['emailAddress'];
    $phone = $_POST['phoneNo'];
    $uName = $_POST['uName'];
    $pass = $_POST['password'];
    $cpass = $_POST['confirmPassword'];

    if ($pass == $cpass) {
        $sql = "INSERT INTO users (fName,lName,gender,emailAddress,phoneNo,uName,password,confirmPassword) 
	values('$fname','$lname','$gender','$email','$phone','$uName','$pass','$cpass')";
    } else {
        ?>
        <script type="text/javascript">
            window.alert("confirm the right password");
            window.location.href = "index.php";
        </script>
        <?php

    }

    if (mysqli_query($conn, $sql)) {
        ?>
        <script type="text/javascript">
            window.alert("Data submitted");
            window.location.href = "index.php";
        </script>
        <?php

    } else {
        echo"Check the values" . mysqli_error();
    }
}

//---------------------------------------------login-process-----------------------------------------------------------------------------
if (ISSET($_POST['signin'])) {
    $uName = $_POST['uName'];
    $pass = $_POST['password'];

    $sqllogin = "SELECT * FROM users WHERE uName='$uName' AND password='$pass'";
    $sql_result = mysqli_query($conn, $sqllogin);

    if ($row = mysqli_fetch_assoc($sql_result)) {
        $_SESSION['uID'] = $row['uID'];
        $_SESSION['userName'] = $row['uName'];
        header("Location:home.php");
    } else {
        ?>
        <script type="text/javascript">
            window.alert("Wrong username or Password");
            window.location.href = "index.php";
        </script>
        <?php

    }
}

//---------------------------------------------query-process-----------------------------------------------------------------------------

if (ISSET($_POST['submitInquiry'])) {
    $catergory = $_POST['categoryName'];
    $desc = $_POST['categoryDesc'];

    $sqlinquiry = "INSERT into inquiry(categoryName,categoryDesc) values('$catergory','$desc')";
    if (mysqli_query($conn, $sqlinquiry)) {
        ?>
        <script type="text/javascript">
            window.alert("Your Query has been submitted.We shall give you feedback");
            window.location.href = "query.php";
        </script>
        <?php

    } else {
        ?>
        <script type="text/javascript">
            window.alert("Failed to submit query");
            window.location.href = "query.php";
        </script>
        <?php

    }
}
//-----------------------------------------popup process-------------------------------------------
if (ISSET($_POST['submitOrder'])) {
    $cAdd = $_POST['custAddress'];
    $pMode = $_POST['paymentMode'];
    $uID = $_POST['userId'];
    $prodID = $_POST['pID'];
//    $query = "INSERT into orders(customerID,productID,custAddress,paymentMode) values ({$uID},{$prodID},'$cAdd','$pMode')";

    $query = "INSERT INTO `orders` (`uID`, `pID`, `custAddress`, `paymentMode`) "
            . "VALUES ({$uID}, {$prodID}, '$cAdd', '$pMode')";

    if (mysqli_query($conn, $query)) {
        ?>
        <script type="text/javascript">
            alert('Data Submitted');
            window.location = "computers.php";
        </script>
        <?php

    } else {
        die('Data not submited ' . mysqli_connect_error());
    }
}

if ($action == "logout") {

//    function logout() {
//    $_SESSION['uID'] = "";
//    $_SESSION['userName'] = "";
    session_destroy();
    ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
    <?php

//    }
}
?>

