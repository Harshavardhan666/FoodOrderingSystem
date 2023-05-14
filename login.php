<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="js/bootstrap.min.js"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #5c4ac7;
	  }

      /* Popover style */
.popover { 
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 500px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: left;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,.2);
  border-radius: 60px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
  box-shadow: 0 5px 10px rgba(0,0,0,.2);
  height: 65px;
}

.popover .arrow {
  margin-left: 1px;
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}

.popover.top .arrow {
  bottom: -10px;
  left: 50%;
  margin-left: -10px;
  border-top-color: #999;
  border-width: 10px 10px 0;
}

.popover.bottom .arrow {
  top: -10px;
  left: 50%;
  margin-left: -10px;
  border-bottom-color: #999;
  border-width: 0 10px 10px;
}

.popover.left .arrow {
  right: -10px;
  top: 50%;
  margin-top: -10px;
  border-left-color: #999;
  border-width: 10px 0 10px 10px;
}

.popover.right .arrow {
  left: -10px;
  top: 50%;
  margin-top: -10px;
  border-right-color: #999;
  border-width: 10px 10px 10px 0;
}

.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
  /* opacity: 0.3 !important; */
}

.popover-content {
  padding: 9px 14px;
  /* opacity: 1 !important; */
}

.my-class{
    font-size: 14px;
}

#CapsLock-On{
    display: none;
    position: absolute;
    font-size: 15px;
    margin: -10px 0 0 10px;
    color: green;
}

i.fa-user {
    position: absolute;
    font-size: 18px;
    margin: -50px 0 0 215px;
    color: grey;
}

i.fa-eye,
i.fa-eye-slash,
#pass{
    position: absolute;
    font-size: 18px;
    /* margin-top: 10px;
    margin-left: -100px; */
    margin: -25px 0 0 105px;
    color: grey;
}

#eye1 {
    display: none;
}

input:focus {
    outline: none;
}

table {
    color: black;
    background-color: #d8e3e7;
    border-radius: 3px;
}


</style>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/15f8b2b9b3.js" crossorigin="anonymous"></script>
  
    <script>
        function toggle() {
            var x = document.getElementById("password");
            var y = document.getElementById("eye1");
            var z = document.getElementById("eye2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                y.style.color = "green";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>
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
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="edit.php" class="nav-link active">Profile</a> </li>';
							}
						else
							{
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<div style=" background-image: url('images/img/pimg.jpg');">

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>

<div class="pen-title">
  <
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
        <br>
      <!-- <input type="text" placeholder="Username"  name="username" class="btn1 btn1-lg btn1-danger" data-container = "body" data-toggle="popover" data-placement="right" data-html="true" data-template='<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' data-content="<p class = 'my-class'>Your Complete Roll No, <br> <strong> Example: </strong> CB.EN.U4CSE20621 </p>" data-trigger = "hover" style = "max-width: 400px opacity: 1;" /> -->
      <table>
      <tr>
        <th align="center" colspan="2"><input type="text" name="username" id="username" placeholder="Username" class="btn1 btn1-lg btn1-danger" data-container = "body" data-toggle="popover" data-placement="right" data-html="true" data-template='<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' data-content="<p class = 'my-class'>Your Complete Roll No, <br> <strong> Example: </strong> CB.EN.U4CSE20621 </p>" data-trigger = "hover" style = "max-width: 400px opacity: 1;"
                size="35" autofocus required> <i class="far fa-user"></i></th>
    </tr>

      <tr>
        <th align="center" colspan="2"><input type="password" name="password" id="password"
                placeholder="Password" size="35" required onkeydown="capsverify(event)" class="btn1 btn1-lg btn1-danger" data-container = "body" data-toggle="popover" data-placement="right" data-html="true" data-template='<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' data-content="<p class = 'my-class'> Your domain password (or) your Amrita Wi-Fi password </p>" data-trigger = "hover" style = "max-width: 400px opacity: 1;"> <span id="pass"
                onclick="toggle()"><i class="fas fa-eye" id="eye1"></i><i class="fas fa-eye-slash"
                    id="eye2"></i></span></th>
                </tr>
      <!-- <input type="password" placeholder="Password" name="password" class="btn1 btn1-lg btn1-danger"  required onkeydown="capsverify(event)" data-container = "body" data-toggle="popover" data-placement="right" data-html="true" data-template='<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' data-content="<p class = 'my-class'> Your domain password (or) your Amrita Wi-Fi password </p>" data-trigger = "hover" style = "max-width: 400px opacity: 1;"/> -->
      <!-- <span onclick="toggle()"><i class="fas fa-eye" id="eye1"></i><i class="fas fa-eye-slash" id="eye2"></i></span> -->
      <tr>
        <td align="center" id="CapsLock-On" colspan="1"><span id="caps"><text id="text"><i
                        class="fas fa-exclamation-circle" id="important"></i>&nbsp;CAPSLOCK Key Is Turned
                    On!</text></span></td>
      </tr>
      </table>
      <br>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>

  <script>
        function capsverify(event) {
            var elem1 = event.getModifierState("CapsLock"); // if capslock is on it returns true otherwise false
            if (elem1 == true) {
                let val = document.getElementById("CapsLock-On");
                val.style.display = "block";
            } else {
                let val = document.getElementById("CapsLock-On");
                val.style.display = "none";
            }
        }

    </script>
  
  <div class="cta">Forgot Password?<a href="edit.php" style="color:#5c4ac7;"> Reset </a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
  <div class="container-fluid pt-3">
	<p></p>
  </div>


   
        <footer class="footer">
            <div class="container">

             
                <div class="bottom-footer">
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
        </footer>
       
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </script> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
        <script>
            $(document).ready(function(){
            $('[data-toggle="popover"]').popover({
                trigger: 'hover'
            });
            });
        </script>

</body>

</html>
