<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); 
error_reporting(0);
session_start();

if(isset($_POST['submit']))  
{
	// $old_pass = $_POST['old_pass'];
    $old_pass = md5($_POST['old_pass']);
	$new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];
	
	if(!empty($_POST["submit"]))   
     {
        $loginquery ="SELECT password FROM users WHERE u_id=8"; //selecting matching records
        $result=mysqli_query($db, $loginquery); //executing
        $row=mysqli_fetch_array($result);
        // password='".md5($password)."'
        if($row['password']==$old_pass){
            if($new_pass == $confirm_pass){
                $mql = "UPDATE users SET password=('".md5($_POST['new_pass'])."') WHERE u_id=8";
                mysqli_query($db, $mql);
                header("refresh:0.1;url=login.php");
            }else{
                echo "<script>alert('Both the passwords are not matching');</script>";
            }
        }else{
            echo "<script>alert('WRONG PASSWORD');</script>"; 
        }
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:0, url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Edit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .btn-inverse {
            background: #2f3d4a;
            border: 1px solid #2f3d4a;
            color: #ffffff;
        }

        .btn-inverse:hover {
            background: #2f3d4a;
            opacity: 0.7;
            color: #ffffff;
            border: 1px solid #2f3d4a;
            background-color: #232a37;
            border: 1px solid #232a37;
        }

        .btn-inverse:active {
            background: #232a37;
            color: #ffffff;
            background-color: #232a37;
            border: 1px solid #232a37;
        }

        .btn-inverse:focus {
            background: #232a37;
            color: #ffffff;
            background-color: #232a37;
            border: 1px solid #232a37;
        }

        .btn-inverse.disabled {
            background: #2f3d4a;
            border: 1px solid #2f3d4a;
            color: #ffffff;
        }

        .btn-inverse.disabled:hover {
            background: #2f3d4a;
            opacity: 0.7;
            color: #ffffff;
            border: 1px solid #2f3d4a;
        }

        .btn-inverse.disabled:active {
            background: #232a37;
            color: #ffffff;
        }

        .btn-inverse.disabled:focus {
            background: #232a37;
            color: #ffffff;
        }

        .btn-inverse.active {
            background: #232a37;
            color: #ffffff;
            background-color: #232a37;
            border: 1px solid #232a37;
        }

        .btn-inverse.disabled.active {
            background: #232a37;
            color: #ffffff;
        }

        .btn-primary {
            background: #5c4ac7;
            border: 1px solid #5c4ac7;
            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in;
        }

        .btn-primary:hover {
            background: #5c4ac7;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            border: 1px solid #5c4ac7;
        }

        .btn-primary:active {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
        }

        .btn-primary:active:focus {
            background-color: #6352ce;
            border: 1px solid #6352ce;
        }

        .btn-primary:active:hover {
            background-color: #6352ce;
            border: 1px solid #6352ce;
        }

        .btn-primary:focus {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            background-color: #6352ce;
            border: 1px solid #6352ce;
        }

        .btn-primary.disabled {
            background: #5c4ac7;
            border: 1px solid #5c4ac7;
            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in;
        }

        .btn-primary.disabled:hover {
            background: #5c4ac7;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            border: 1px solid #5c4ac7;
        }

        .btn-primary.disabled:active {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
        }

        .btn-primary.disabled:focus {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
        }

        .btn-primary.active {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
        }

        .btn-primary.active:focus {
            background-color: #6352ce;
            border: 1px solid #6352ce;
        }

        .btn-primary.active:hover {
            background-color: #6352ce;
            border: 1px solid #6352ce;
        }

        .btn-primary.disabled.active {
            background: #6352ce;
            -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
            box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
        }
    </style>
</head>

<body>
<header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/icn.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Canteens <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>';
							}
						else
							{

                                echo '<li class="nav-item"><a href="edit_profile.php" class="nav-link active">Profile</a> </li>';

									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>
    <?php 
        $user= mysqli_query($db,"select * from users where u_id=8");
        $rows=mysqli_fetch_array($user);
 	?> 
    <div class="page-wrapper">
    

        <div class="container">
            <h1>Edit Profile</h1>
            <hr>
            <div class="row">
                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <h3>Personal info</h3>
                    <form class="form-horizontal" role="form" action="" method="post">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" value="<?php echo $rows["f_name"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $rows["l_name"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Admitted Branch:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $rows["Admitted Branch"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Section:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $rows["Section"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $rows["email"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Username:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="<?php echo $rows["username"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Balance:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" value="<?php echo $rows["balance"]; ?>" readonly>
                            </div>
                        </div>
                        
                        <div id="hide">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Current Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="" name="old_pass" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">New Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="" name="new_pass" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm new password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="" name="confirm_pass" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-primary" name="submit" value=" Change Password">
                                        <span></span>
                                        <input type="reset" class="btn btn-default" value="Cancel">
                                    </div>
                                </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container">

                <div class="row bottom-footer">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
                                 <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                 </li>
                              </ul>
                           </div> -->
                            <a href="https://www.amrita.edu/" target="_blank"><img src="images/amrita.jpg" class="col-xs-12 col-sm-3 payment-options color-gray"></a>

                            <div class="col-xs-12 col-sm-4 address color-gray">
                                <h5>Address</h5>
                                <p>Amrita Vishwa Vidyapeetham, Ettimadai, Coimbatore, Tamil Nadu, PIN: 641112 </p>
                            </div>
                            <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                <h5>Addition informations</h5>
                                <!-- <p>Join thousands of other restaurants who benefit from having partnered with us.</p> -->
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquam quam consequuntur quasi deserunt debitis, similique maiores repudiandae laborum id nulla, veritatis magni incidunt mollitia voluptatum? Perspiciatis pariatur molestiae sunt.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>

