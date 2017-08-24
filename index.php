<?php
session_start();
?>
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
            <div class="row head" style="border-bottom:1px solid #228B22;">
                <div class="col-sm-4">
                    <img src="images/website-logo.png" class="img-responsive logo" alt="istreams">
                </div>

                <div class="col-sm-8">
                    <header class="head1">CLIENT MANAGEMENT SYSTEM</header>
                </div>	
            </div>
            <div class="row">
                <div class="col-sm-4">
                </div>

                <div class="col-sm-4">
                    <div class="panel panel-success" style="margin-top:10px;box-shadow: 1px 2px 4px #6495ED;">
                        <div class="panel-body">
                            <form method="POST" action="process.php">
                                <div class="form-group">
                                    <h3 style="color:#6495ED;">LOGIN FORM</h3>
                                    <hr/>
                                </div>
                                <div class="form-group">
                                    <label>Username:</label>
                                    <input type="text" name="uName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <input type="submit" name="signin" class="btn btn-primary" value="Sign in">
                                <a href="signup.php" data-toggle="modal" data-target=".demo-popup">Signup to get an account</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>

                    <div class="container">
                        <!-- popup box modal starts here -->
                        <div class="modal fade demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close"style="color:red;" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- popup box modal ends here -->
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class ="row foot" style="border-top:1px solid #228B22;border-bottom:1px solid white; ">
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