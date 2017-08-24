<!Doctype html>
<html>
    <?php
    include("config.php");
    $selected = mysqli_query($conn, "SELECT * FROM products where productType='website' AND Active!='NULL';");
//$i = 1;
    ?>
    <head>
        <meta charset utf ="8">
        <link href="css/webcss.css" rel="Stylesheet">
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
        <title>Our websites</title>
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

            <div class="row">
                <div class="col-sm-12">
                    <p style="color:#228B22;font-size:20px;">What kind of website do you want?</p>
                    <!-------------------------------------------------------php-------------------------------------------------------------->
                    <?php
                    while ($personrow = mysqli_fetch_array($selected)) {
                        $personid = $personrow['pID'];
                        $FirstName = $personrow['productName'];
                        echo "<button class='accordion'>";
                        echo $personrow['productName'];
                        echo ' ';
                        echo $personrow['productType'];
                        echo "</button>";
                        echo "<div class='panel'>";
                        echo "<div class='col-sm-6'>";
                        ?><p><img src="staff/user_images/<?php echo $personrow['productImage']; ?>" class="img-rounded" width="250" height="200" /></p><?php
                        echo "</div>";
                        echo "<div class='col-sm-6'>";
                        echo "<p>";
                        echo $personrow['productDesc'];
                        echo"</p>";
                        echo"<br/>";
                        ?>
                        <button href="" data-toggle="modal" data-target="#<?php echo $personid; ?>" class='btn btn-primary' style='float:right;color:red;' >Click to Order</button>
                        <?php
                        echo "</div>";
                        echo "</div>";

                        include 'modal.php';
                    }
                    ?>					
                    <!-------------------------------------------------------php-------------------------------------------------------------->					
                    <script type="text/javascript" src="websitejs/try1.js"></script>	
                </div>
            </div>
            <div class ="row foot">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="home.php">HOME</a>
                        <a href="computers.php">Computers</a><br/>
                        <a href="disks.php">Disks</a>
                        <a href="spare.php">Computer Spare Parts</a><br/>
                        <a href="websites.php">Websites</a>
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
                        <a href="home.php">HOME</a>
                        <a href="computers.php">Computers</a><br/>
                        <a href="disks.php">Disks</a>
                        <a href="spare.php">Computer Spare Parts</a><br/>
                        <a href="websites.php">Websites</a>
                    </div>
                </div>
                <div class="row">
                    <p style="text-align:center;font-size:20px;padding-top:2%;">&copy Great-Team</p>
                </div>
            </div>
        </div>
    </body>
</html>
