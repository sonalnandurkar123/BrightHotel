<?php
require "conn.php";
if(isset($_POST['login']))
{
    $stmt = $conn->prepare("SELECT * FROM user_signup where email='$_POST[email]' and password='$_POST[password]'");
	$stmt->execute();
	$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
if($row)
{
	echo "<script>alert('WELCOME!!!')</script>" ;
	//echo "inserted successfully";
	//header("location:user_signup.php");
}
else{
	echo "<script>alert('please check email and password!!!')</script>" ;
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Bright Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("admin/images/Rooms/bg_2.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container1 {
  position: absolute;
  :0 ;
  margin: 50px;
  max-width: 350px;
  padding: 20px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  margin-left:600px;
margin-top:80px;
padding-bottom:50px;
}





/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #f0455e;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
h1 {
  color: #f0455e;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;

}


</style>
</head>
<body>
 <?php require "nav.php";?>


<div class="bg-img">
 <form  class="container1" action="" method="post">   
<center><i class="fa fa-user-circle-o" style="font-size:36px;color:#f0455e;"></i></center>
<center><h3 style="color:white;">Login Here</h3></center>


    <label for="email"><b>Email</b></label>
	
<i  class="fa fa-user" style="font-size:30px;color:#f0455e;"></i>
	
    <!--<i class="fa fa-user"style="font-size:30px;color:#f0455e;"></i>-->
    <input type="text"   placeholder="Enter Email" name="email" required >

    <label for="password"><b>Password</b></label>
	<i class="fa fa-unlock-alt"style="font-size:30px;color:#f0455e;"></i>
    <input type="password" placeholder="Enter Password" name="password" required>
	
	<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
<br>
<button type="submit" name="login" class="btn btn-primary btn-sm btn-block">LOGIN</button>
    <!--<button type="submit" name="login" class="btn">Login</button>-->
	&nbsp;
	<div class="text-center">
	
 
 <p style=margin-left:20px>Don't have an account ?<a href="user_signup.php" style="color:#f0455e;">Register</a></p>
 <p style="color:white;"><a href="forgot-password.html" style="color:#f0455e;">Forget Password</a></p>
 <!--<a href="user_signup.php"> <p  class="text-danger" style="color:white;">Don't have an account ? &nbsp;  <class="text-danger" style="color:#f0455e;"> Register</p></a>-->
	 
	 </div>
	 
  </form>
  
</div>

  <?php require "reviews.php";?>


  <?php require "footer.php";?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
</body>

</html>
