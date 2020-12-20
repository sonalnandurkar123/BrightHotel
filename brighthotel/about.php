<?php
session_start();
include_once "conn.php";
date_default_timezone_set("Asia/kolkata"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bright Hotel</title>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
    
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	
  <style>
	
	.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
	height:550px;
  }
  </style>
  
  </head>
  <body>
 <?php require "nav.php";?>
  <!-- END nav -->


  
  <div class="block-30 block-30-sm item" style="background-image: url('admin/images/about/blog-23.jpg');" data-stellar-background-ratio="0.5">
    <div class="container py-xl-5 py-lg-3">
      <div class="row align-items-center">
        <div class="col-md-1">
          <span class="subheading-sm">About</span>
          <h2 class="heading">The Hotel</h2>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  
   <section class="w3ls-bnrbtm py-5" id="about">
  <div class="container">
 <h1 class="title-w3 mb-md-5 mb-sm-4 mb-2 text-center font-weight-bold" style="font-size:60px;">About Us</h1></br>
   <div class="row">
   <div class="col-lg-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	 <div class="item">
        <img src="admin/images/photos/blog-1.jfif" alt="New york" style="width:80%;">
      </div>
      <div class="item active">
        <img src="admin/images/photos/blog-17.jpg" alt="Los Angeles" style="width:80%;">
      </div>

      <div class="item">
        <img src="admin/images/photos/blog-20.jpg" alt="Chicago" style="width:80%;">
      </div>
    
      <div class="item">
        <img src="admin/images/photos/slider-3.jpg" alt="New york" style="width:80%;">
      </div>
	   <div class="item">
        <img src="admin/images/photos/blog-22.jpg" alt="New york" style="width:80%;">
      </div>
    </div>
	</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</section>

<?php require "reviews.php";?>



  <?php require "footer.php";?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>