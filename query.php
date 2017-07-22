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

            </div>

            <div class="row">
                <div id="navbar">    
                    <nav class="navbar navbar-default navbar-static-top " role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span classlToggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#" style="color:green;">System Menu</a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="home.php">HOME</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">OUR*PRODUCTS<b class="caret"></b></a> 

                                    <ul class="dropdown-menu">
                                        <li><a href="computers.php">Computers</a></li>
                                        <li><a href="spares.php">Computer Spare Parts</a></li>
                                        <li><a href="disks.php">Disks</a></li>
                                        <li><a href="websites.php">Websites</a></li>

                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Software</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">SACCO</a></li>
                                                <li><a href="#">Business Support</a></li>
                                                <li><a href="#">Schools Support</a></li>
                                                <li><a href="#">Hospital Supports</a></li>
                                                <li><a href="#">Streamline</a></li>                           
                                            </ul>
                                        </li>                                   
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">REPAIR*MAINTENACE</a>
                                </li>
                                <li class="active"><a href="query.php">INQUIRY/COMPLAINT</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TRAINING<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Internship</a></li>
                                        <li><a href="#">Short Courses</a></li>                                
                                    </ul>
                                </li>
                                <a href="index.php">
                                    <button type="button" class="btn btn-warning" name="logout" style="margin-top:10px; margin-left:340px">LOGOUT</button>
                                </a>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <img src="images/question.jpg" alt="issue" class="img-responsive">
                </div>
                <div class="col-sm-8 checks" >
                    <form method="POST" action="process.php">
                        <input type="radio" name="categoryName" value="Installation"/>
                        <label>Installation</label>

                        <input type="radio" name="categoryName" value="Hardware-Failure"/>
                        <label>Hardware Failure</label>

                        <input type="radio" name="categoryName" value="Purchase"/>
                        <label>Purchase</label>

                        <input type="radio" name="categoryName" value="Website"/>
                        <label>Website</label>

                        <input type="radio" name="categoryName" value="Training"/>
                        <label>Training</label>

                        <input type="radio" name="categoryName" value="Other"/>
                        <label>Other</label>

                        <hr>
                        <label>Enter Your Description Here:</label>
                        <textarea class="form-control" rows="5" name="categoryDesc" id="comment"></textarea>
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