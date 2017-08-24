<!DOCTYPE>
<html>
    <?php
    include("config.php");
    $selected = mysqli_query($conn, "SELECT * FROM products where productType='computer' AND Active!='NULL';");
//$i = 1;
    ?>
    <head>
        <link href="css/client.css" rel="Stylesheet">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/bootstrap.css" rel="Stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script type="text/javascript">
            function paymentnfo() {
                var radios = document.getElementsByName('paymentMode');

                for (var i = 0, length = radios.length; i < length; i++) {
                    if (radios[i].checked) {
                        // do whatever you want with the checked radio

                        if (radios[i].value === "MobileMoney") {
                            alert("Send the Money to this Number: 0776231019 and add the reason as:Product Name.We will give you feedback");
                        }
                        if (radios[i].value === "AccountNo") {
                            alert("Deposit the money in Housing Finance Bank, Account Number:4356278908, Mbarara branch.We will give you feedback");
                        }
                        // only one radio can be logically checked, don't check the rest
                        break;
                    }
                }
            }
        </script>
        <title>computers</title>
    </head>
    <div class="b-container">
        <div class="row head">
            <div class="col-sm-4">
                <img src="images/website-logo.png" class="img-responsive logo" alt="istreams">
            </div>

            <div class="col-sm-8">
                <header class="head1">CLIENT MANAGEMENT SYSTEM</header>
            </div>
            <?php
            session_start();
            $uID = $_SESSION['uID'];
            $username = $_SESSION['uName'];
            if ($uID != NULL && $username != NULL) {
                echo "<h4 style='color:#6495ED;float:right;'>" . "Logged in as" . " " . $username . "</h4>";
            } else {
                header("location:index.php");
            }
            ?>
        </div>
        <div class="row">
            <?php
            include 'menu.php';
            ?>
        </div>
    </div>
    <div class="b-container">
        <div class="row">

            <h2 class="dischead" style="color:green;">Istreams has a variety if computers, both laptops and desktops of different models and brands</h2>

            <?php
            while ($personrow = mysqli_fetch_array($selected)) {
                $personid = $personrow['pID'];
                $FirstName = $personrow['productName'];
                ?>
            </div>
        </div>
        <div class="b-container">
            <div class="col-sm-4">


                <div class='panel panel-info'>
                    <div class='panel-body'>
                        <img src="staff/user_images/<?php echo $personrow['productImage']; ?>" class="img img-rounded" width="200" height="100" />

                    </div>
                    <div class='panel-footer'>
                        <?php
                         echo $personrow['productDesc'];
                        echo $personid;
                        ?>
                        <a href="" data-toggle="modal" data-target="#<?php echo $personid ?>" style="color:green;" >Click to Order</a>

                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    <div>
        <?php
        include 'modal.php';
        ?>
    </div>


    </html>
    <?php
}
