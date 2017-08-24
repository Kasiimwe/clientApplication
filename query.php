<?php
include("config.php");
?>
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
        <title>inquiry</title>
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
                <div class="col-sm-4">
                    <img src="images/question.jpg" alt="issue" class="img-responsive">
                </div>
                <div class="col-sm-8 checks" >
                    <form method="POST" action="process.php">
                        <input type="hidden" id="uID" value="<?php echo $uID ?>" name="uID"/>
                        <input type="checkbox" name="inquiryName[]" value="Installation"/>
                        <label>Installation</label>

                        <input type="checkbox" name="inquiryName[]" value="Hardware-Failure"/>
                        <label>Hardware Failure</label>

                        <input type="checkbox" name="inquiryName[]" value="Purchase"/>
                        <label>Purchase</label>

                        <input type="checkbox" name="inquiryName[]" value="Website"/>
                        <label>Website</label>

                        <input type="checkbox" name="inquiryName[]" value="Training"/>
                        <label>Training</label>

                        <input type="checkbox" name="inquiryName[]" value="Other"/>
                        <label>Other</label>

                        <hr>
                        <div class="form-group">
                        <input type="hidden" class="form-control" id="date" name="date" value="<?php echo date('d-m-Y')?>" onclick="myFunction();" required style="width:60%;"/>
                        </div>
                        <script>
                            function myFunction() {
                                document.getElementById('date').value = Date();
                            }
                        </script>
                        <div class="form-group">
                        <label>Enter Your Description Here:</label>
                        <textarea class="form-control" rows="3" name="inquiryDesc" id="comment" required/></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submitInquiry">Submit Your Inquiry</button>
                    </form>	
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