<!Doctype html>
<html>
    <head>
        <meta charset utf ="8">
        <link href="css/client.css" rel="Stylesheet">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/bootstrap.css" rel="Stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
        <title>home</title>
    </head>
    <style>
        .table {
            border-top: 1px solid green;
            margin-left: 35px;
            margin-top: 5px;
            margin-right:0px;
            width: 95%;
            padding: 8px;
        }
        .table fieldset{
            height:50%;
            width:50%;
            padding-left:30px;
            border: 2px solid white;
            width: 80%;
            margin-left: 180px;
            margin-right: 0px;
        }
        .table fieldset label{
            float:center;
        }
    </style>
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
                    <nav class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span classlToggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">HOME</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">OUR*PRODUCTS<b class="caret"></b></a> 

                                    <ul class="dropdown-menu">
                                        <li><a href="computers.html">Computers</a></li>
                                        <li><a href="spare.html">Computer Spare Parts</a></li>
                                        <li><a href="disks.html">Disks</a></li>
                                        <li><a href="websites.html">Websites</a></li>

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
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">REPAIR*MAINTENACE<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Preventive-Maintenance</a></li>
                                        <li><a href="#">Installations</a></li>
                                        <li><a href="#">Networking</a></li>
                                        <li><a href="#">Hardware Repair</a></li>                                  
                                    </ul>
                                </li>
                                <li><a href="#">INQUIRY/COMPLAINT</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TRAINING<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Internship</a></li>
                                        <li><a href="#">Short Courses</a></li>                                
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">TO*DO<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Register with us</a></li>
                                        <li><a href="#">Order product</a></li>
                                        <li><a href="#">Visit our sites</a></li>
                                        <li><a href="#">Contact for more</a></li>                                  
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="container">  
                <p style="color:blue; font-size:20px;"><marquee>Please fill in your correct information!!!!!!</marquee></p>
                <fieldset  style="border-color:#CC9933;margin-left:50px;margin-right:70px;" class="b-container">

                    <legend style="color:blue; background-color:gold;border-radius:5px;"><span style="margin-left:20px;">INTERNS REGISTRATION FORM</legend>

                    <form action="submit.php" method="post" class="b-container">
                        <table class="table" >
                            <tr>
                                <td><label>FIRST NAME</label></td>
                                <td><input name="fname" id="fname" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="first_name" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>LAST NAME</label></td>
                                <td><input name="lname" id="lname" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="last_name" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>REG NO</label></td>
                                <td><input name="regno" id="regno" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="reg_no" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>EMAIL</label></td>
                                <td><input  name="email" id="email" type="email" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="email" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>DATE OF BIRTH</label></td>
                                <td><input  name="dob" id="dob" type="date" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="mm/dd/yy" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>CONTACT</label></td>
                                <td><input name="phone" id="phone" type="number" style="padding:5px 54px;color:white;margin-left:25%;" style="width:100%;" ></td>
                            </tr>
                            <tr>
                                <td><label>LOCATION</label></td>
                                <td><input name="location" id="place" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="location" style="width:100%;" ></td>
                            </tr>
                            <tr>
                                <td><label>UNIVERSITY</label></td>
                                <td><input  name="campus" id="campus" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="campus" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>YEAR OF STUDY</label></td>
                                <td><input type="text" name="academic_year" id= "academicyear" style="padding:5px 54px;color:white;margin-left:25%;"  placeholder="academic_year" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>COURSE</label></td>
                                <td><input name="course" id="course" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="course" style="width:100%;" ></td>
                            </tr>
                            <tr>
                                <td><label>FACULTY</label></td>
                                <td><input name="faculty" id="faculty" type="text" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="faculty" style="width:100%;" ></td>
                            </tr>
                            <tr>
                                <td><label>YEAR</label></td>
                                <td><input name="year" id="year" type="YEAR" style="padding:5px 54px;color:white;margin-left:25%;" placeholder="----Select---" style="width:100%;" ></td>
                            </tr>

                        </table>
                        <input type="submit" name="Input" style="padding:10px; background-color:gold; margin-left:85%"  value="submit Details" onClick="validate()" >
                    </form>
                </fieldset>

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
                    <p style="text-align:center;font-size:20px;padding-top:2%;">&copy Future Technology International Ltd</p>
                </div>
            </div>
        </div>
    </body>
</html>