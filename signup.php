<!Doctype html>
<html>
    <head>
        <title>sign up</title>
        <meta charset utf ="8">
        <link href="css/client.css" rel="Stylesheet">
        <link href="css/bootstrap.min.css" rel="Stylesheet">
        <link href="css/bootstrap.css" rel="Stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="Stylesheet">
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/form-validation.js"></script>
        <style>
            .signup-container{
                margin-top:2px;
            }

            .signup-container form{

                color:#6495ED;
                font-size:15px;
            }

            .signup-container input{
                padding-left:50px;
            }
        </style>
    </head>
    <body>
        <div class="modal-header">
            <button type="button" class="close" style="color:blue;" data-dismiss="modal" aria-hidden="true">&times;</button> 
            <h3 class="modal-title" style="color:green;">Please sign up here</h3>
        </div>
        <div class = "row signup-container">
            <div class="col-sm-12">
                <form method="POST" name="registration_form" id="registration_form" action="process.php" style="padding:20px 40px;">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="fName" id="fName" placeholder="Enter First Name" required>
                    </div>


                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lName" id="lName" placeholder="Enter Last Name" required>
                    </div>


                    <div class="form-group">
                        <label>Gender:</label>
                        <select name="gender" class="form-control" id="gender" required>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Email Address:</label>
                        <input type="Email" class="form-control" name="emailAddress" id="emailAddress" placeholder="Example2323@mail.com" required>
                    </div>

                    <div class="form-group">
                        <input type="hidden" value="client" name="type" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Enter Prefered Username:</label>
                        <input type="text" class="form-control" name="uName" id="uName" placeholder="user name" required>
                    </div>


                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>


                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                        <hr>   
                    </div>


                    <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-warning" name="register" value="REGISTER">REGISTER 
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>