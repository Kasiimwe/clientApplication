<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!Doctype html>
<?php
session_start();
include("config.php");
?>
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
        <script type="text/javascript">
            function paymentnfo() {
                var radios = document.getElementsByName('paymentMode');

                for (var i = 0, length = radios.length; i < length; i++) {
                    if (radios[i].checked) {
                        // do whatever you want with the checked radio
                        
                        if(radios[i].value === "MobileMoney"){
                           alert("Send the Money to this Number: 0776231019 and add the reason as:Product Name.We will give you feedback"); 
                        }
                        if(radios[i].value === "AccountNo"){
                           alert("Deposit the money in Housing Finance Bank, Account Number:4356278908, Mbarara branch.We will give you feedback");  
                        }
                        // only one radio can be logically checked, don't check the rest
                        break;
                    }
                }
            }
        </script>
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
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">OUR*PRODUCTS<b class="caret"></b></a> 

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
                                <li><a href="query.php">INQUIRY/COMPLAINT</a></li>
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
                <p>Istreams has a variety if computers, both laptops and desktops of different models and brands</p>
                <div class="row">
                    <!-----------------------------------------------------------------php------------------------------------------------->
                    <?php
                    $imagesql = "SELECT*FROM products";
                    $resulte = mysqli_query($conn, $imagesql);

                    while ($row = mysqli_fetch_assoc($resulte)) {
                        if ($row["pID"] < 4) {
                            ?>
                            <div class='col-sm-4'>
                                <div class='panel panel-info'>
                                    <div class='panel-body'>
                                        <img src="<?php echo $row["productImage"]; ?>" class="img-responsive" alt="computers">

                                    </div>
                                    <div class='panel-footer'>
                                        <?php
                                        echo $row["productDesc"];
                                        echo $row['pID'];
                                        ?>
                                        <a href='#modal_order' data-toggle='modal' data-target='.demo-popup' style='color:green;' onclick="ShowModal(<?php echo $row['pID']; ?>);">Click to Order</a>-->
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>	
                    <!-----------------------------------------------------------------php------------------------------------------------->

                    <!-------------------------------------------------------------------popup------------------------------------------------>
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
                    <p style="text-align:center;font-size:20px;padding-top:2%;">&copy Future Technology International Ltd</p>
                </div>
            </div>
        </div>
    </body>
</html>


<div class='modal fade demo-popup' tabindex='-1' id ="modal_order" role='dialog' aria-labelledby='myLargeModalLabel-1' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class="modal-header">
                <button type="button" class="close"style="color:red;" data-dismiss="modal" aria-hidden="true">&times;</button> 
                <p class="modal-title" id = "form_head" style="color:green;" value=""></p>
            </div>
            <div class = "row signup-container">
                <div class="col-sm-12">
                    <form method="POST" action="process.php">
                        <div class="row">
                            <p style="margin-left:30px;">@ only:UgShs-->
                                <input type="text" id="form_price" value="" readonly style="margin-left:30px;border:1px solid white;" >
                                </input>
                            </p>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <img id="form_image" class="img-responsive" width="300px" height="300px" alt="product">
                            </div>
                            <div class="col-sm-6">
                                <p id="form_desc" value="" style="margin-top:40px;color:green;"></p>
                                <input type="text" name="custName" placeholder="Enter your names"/>
                                <input type="text" name="custAddress" placeholder="Your Postal Address"/>
                                <input type="text" name="custContact" placeholder="Your Contact"/><br/>
                                <label style="color:green;" ><u>MODE OF PAYMENT</u></label><br/>
                                <label style="color:green;" >MobileMoney</label>
                                <input type="radio" name="paymentMode" id="paymentMode" value="MobileMoney" onclick="paymentnfo();"/>
                                <label style="color:green;">Account Number</label>
                                <input type="radio" name="paymentMode" id="paymentMode" value="AccountNo" onclick="paymentnfo();"/>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" style="margin-bottom:10px;margin-left:80%;" class="btn btn-warning" name="submitOrder">
                            Submit Order 
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function ShowModal(id) {
        $.ajax({
            type: 'POST',
            url: 'get_prod_id.php',
            data: {id: id},
            dataType: "json",
            success: function (result) {
                document.getElementById('form_head').innerHTML = result['productName'];
                document.getElementById('form_image').src = result['productImage'];
                document.getElementById('form_desc').innerHTML = result['productDesc'];
                document.getElementById('form_price').value = result['productPrice'];

            }
        });
    }

</script>

