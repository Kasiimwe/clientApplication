<!Doctype html>
<?php
include("config.php");
?>
<html>
    <head>
        <meta charset utf ="8">
        <link href="css/client.css" rel="Stylesheet">
        <link href="css/style.css" rel="Stylesheet">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.3.min (1).js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <title>internship</title>
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
                <div class="col-sm-5">
                    <p style="color:black;margin-top: 15px; font-size:23px;font-family:geogia, serif;">Istreams offers quality internship training for all its participants.This runs for the months of JUNE to AUGUST.
                        Fill in the form to enroll yourself or someone else for the training.</p>
                   <br/><br/> <img src="images/internship.jpg" alt="intern" class="img-responsive">
                </div>
                <div class ="col-sm-7">
                    <div class='panel panel-success'>
                        <div class='panel-body' >
                            <div class="row"> 
                                <h3 style="color:green;border-radius:5px;"><center>PLEASE FILL IN YOUR DETAILS</center></h3>

                                <hr>
                            </div>
                            <div class="row ">
                                <form method="POST" action="process.php" style="margin-left:45px;margin-right:10px;">
                                    <input type="text" name="firstName" class="form-control" placeholder="First Name" style="width:90%;"><br/>
                                    <input type="text" name="lastName" class="form-control" placeholder="Last Name" style="width:90%;"><br/>
                                    <input type="text" name="registrationNo" class="form-control" placeholder="Registration number" style="width:90%;"><br/>
                                    <input  type="email" name="email" class="form-control" placeholder="Your Email Address" style="width:90%;"><br/>
                                    <input type="text" name="phoneNo" class="form-control" placeholder="Your Phone Number" style="width:90%;" ><br/>
                                    <input type="text" name="address" class="form-control" placeholder="Your Address" style="width:90%;" ><br/>
                                    <input type="text" name="university"  class="form-control" placeholder="Your University" style="width:90%;" ><br/>
                                    <input name="academicYear" type="number" class="form-control" placeholder="academic_year" style="width:90%;" ><br/>
                                    <?php
                                    $year = date("Y");
                                    $years_ago = $year - 2;
                                    ?>
                                    <select name="year" class="form-control" style="width:90%;">
                                        <option value="">- select year -</option>
                                        <?php
                                        for ($x = $years_ago; $x < ($years_ago + 4); $x++) {

                                            echo "<option value='{$x}'> {$x}</option>";
                                        }
                                        ?>
                                    </select><br/><br/>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 70%;" name="regIntern" >Register-Std</button>
                                </form>
                            </div>
                        </div>
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

