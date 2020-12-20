<?php
require "conn.php";
if(isset($_POST['save']))
{
	extract($_POST);
    $stmt = $conn->prepare("INSERT INTO `booked_list`(`name`,`room`,`check_in`,`check_out`) VALUES(:name,:room,:check_in,:check_out)");
	
		   /*$name=$_POST['name'];
		   $email=$_POST['email'];
		   $password=$_POST['password'];*/
		   
		   $executed=$stmt->execute(array(':name'=>$name,':room'=>$room,':check_in'=>$check_in,':check_out'=>$check_out,));
		   if($executed)
		   {
			   echo "<script>alert('Your Room is Booked Successfully!!!')</script>" ;
			   //header("location:department_list.php");
		   }
		   else
		   {
			   echo "not inserted";
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

	<style>
 {
  height: 200%
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


/* Add styles to the form container */
.container1 {
  position: absolute;
  :0 ;
  margin: 50px;
  max-width: 1500px;
  
  padding: 50px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  margin-left:540px;
margin-top:60px;
padding-bottom:70px;
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
</style>
  </head>
  <body>
   <?php require "nav.php";?>
  <section  id="section-menus">
  <div class="bg-img">
  <form  class="container1" action="" method="post">   
<center><i class="fa fa-user-circle-o" style="font-size:36px;color:#f0455e;"></i></center>
<!--<center><h3 style="color:white;">Login Here</h3></center>-->
<button type="submit" class="btn btn-primary btn-sm btn-block" name="save">Book The Room</button>
<br>

    <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input class="form-control"  type="text" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
          </div>
		  <div class="row">
				   <div class="col-md-12 form-group">
                      <label for="room">Rooms</label>
					   <select class="form-control" name="room" aria-describedby="emailHelp" placeholder="Enter Name">
	  <option>-Select Room-</option>
        <option>Bachelor Room</option>
        <option>Family Room</option>
        <option>Presidential Room</option>
		 <option>VIP Room</option>
		  <option>Double Room</option>
		  <option>Triple Room</option>
		
       
      </select>
      
                    </div>
					</div>
					<div class="row">
				 
                 <div class="col-md-6">
                  <label for="check_in">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="check_in" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="check_out">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="check_out" id="checkout_date" class="form-control">
                  </div>
                </div>
				</div>
				
				
<div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room">Adult</label>
                      <select name="" id="room" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="room">Children</label>
                      <select name="" id="room" class="form-control">
					  <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                      </select>
                    </div>
                
				 
                  </div>

              <!--<div class="col-md-6">
                <label for="exampleInputcountry">Country</label>
                <input class="form-control"  type="text" name="country" aria-describedby="nameHelp" placeholder="Enter Country">
              </div>
     <div class="col-md-6">
                <label for="exampleInputLastName">Mobile No</label>
                <input class="form-control"  type="text" name="mobile" aria-describedby="nameHelp" value="+91">
              </div>
            </div>
          </div>-->
		   
	&nbsp;
	 <button type="submit" name="save" class="btn btn-primary btn-sm btn-block">BOOK NOW</button>
	<div class="text-center">
	
 
 
 <!--<a href="user_signup.php"> <p  class="text-danger" style="color:white;">Don't have an account ? &nbsp;  <class="text-danger" style="color:#f0455e;"> Register</p></a>-->
	 
	 </div>
	 
  </form>
  </section>

    
  </*?php require "nav.php";?*/>
  <!-- END nav -->
  
  
    
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
    <!-- END section -->
