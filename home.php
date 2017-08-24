<!Doctype html>
<html>
    <head>
        <meta charset utf ="8">
        <link href="css/client.css" rel="Stylesheet">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/bootstrap.css" rel="Stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <title>home</title>
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
                <div class="row">
                    <div class="col-sm-4">
                        <p>Wide range of affordable computer spare parts.</p>
                        <img src="images/spareparts.jpg" class="img-responsive" alt="spare">
                    </div>
                    <div class="col-sm-4">
                        <p>Get yourself an affordable laptop of your choice </p>
                        <img src="images/laptops.jpg" class="img-responsive" alt="laptops">
                    </div>
                    <div class="col-sm-4">
                        <p>Feel free to issue out your <a href="query.php">inquiry</a></p>
                        <img src="images/inquiry.jpg" class="img-responsive" alt="inquiry">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p>Achieve affirmative training with Istreams</p>
                        <img src="images/training.jpg" class="img-responsive" alt="training">
                    </div>
                    <div class="col-sm-4">
                        <p>and a variety of different types of computers</p>
                        <img src="images/computers.png" class="img-responsive" alt="computers">
                    </div>
                    <div class="col-sm-4">
                        <p>All your preffered software can be found here</p>
                        <img src="images/software.jpg" class="img-responsive" alt="software">
                    </div>
                </div>
            </div>
            <div class ="row foot">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html">HOME</a>
                        <a href="computers.html">Computers</a><br/>
                        <a href="disks.html">Disks</a>
                        <a href="spare.html">Computer Spare Parts</a><br/>
                        <a href="websites.html">Websites</a>
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
                        <a href="index.html">HOME</a>
                        <a href="computers.html">Computers</a><br/>
                        <a href="disks.html">Disks</a>
                        <a href="spare.html">Computer Spare Parts</a><br/>
                        <a href="websites.html">Websites</a>
                    </div>
                </div>
                <div class="row">
                    <p style="text-align:center;font-size:20px;padding-top:2%;">&copy Great-Team</p>
                </div>
            </div>
        </div>
    </body>
</html>