<!Doctype html>
<html>
    <head>
        <title>Sell item</title>
        <meta charset utf ="8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/client.css" rel="Stylesheet">
        <link href="../../css/bootstrap.min.css" rel="Stylesheet">
        <link href="../../css/bootstrap.css" rel="Stylesheet">
        <link href="../../css/bootstrap-theme.min.css" rel="Stylesheet">
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
                    <img src="../../images/website-logo.png" class="img-responsive logo" alt="istreams">
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
                                        <li><a href="#">Register Client</a></li>
                                        <li><a href="#">Add Items</a></li>
                                        <li><a href="#">Sell Items</a></li>
                                        <li><a href="#">View Stock</a></li>                                  
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="container">  
                <p style="color:blue; font-size:20px;"><marquee>Your selling items!!!!!!</marquee></p>
                <fieldset  style="border-color:#CC9933;margin-left:30px; margin-right:70px;"class="fieldset" >
                    <legend style="color:blue; background-color:gold;border-radius:5px;"><span style="margin-left:20px;">SALES  FORM </legend>

                    <form action="submit.php" method="post" class="b-container">
                        <table class="table">
                            <tr>
                                <td><label>PRODUCT NAME</label></td>
                                <td><input name="pname" id="pname" type="text" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="----select----" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>QUANTITY</label></td>
                                <td><input name="amount" id="amount" type="number" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="Quantity" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>DATE</label></td>
                                <td><input name="date" id="date" type="DATE" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="Date" style="width:100%;" ></td>
                            </tr>
                            <tr>
                                <td><label>BUYING PRICE</label></td>
                                <td><input  name="b_price" id="b_price" type="number" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="----Select----" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td><label>SELLING PRICE</label></td>
                                <td><input  name="s_price" id="s_price" type="number" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="selling price" style="width:100%;"></td>
                            </tr>
                            <td><label>SOLD BY</label></td>
                            <td><input name="sellitem" id="sellitem" type="text" style="padding:5px 54px;color:white; margin-left:35%;" placeholder="----Select---" style="width:100%;" ></td>
                            </tr>
                        </table>
                        <br/><button type="btn btn-warning" name="Input" style="padding:10px 20px; background-color:gold; margin-left:70%"   onClick="validate()" >Sell Item</button>
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
                        <a href="https://www.facebook.com/i5treams"><img src="../../images/facebook.png" alt="facebook" class="img-responsive fimage"></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="https://www.instagram.com/innovationstreams"><img src="../../images/instagram.png" alt="instagram" class="img-responsive fimage"></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="https://twitter.com/innovationstrms"><img src="../../images/twitter.png" alt="twitter" class="img-responsive fimage"></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="https://www.linkedin.com/company/innovation-streams-limited"><img src="../../images/linkedin-128.png" alt="linkedin" class="img-responsive fimage"></a>
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