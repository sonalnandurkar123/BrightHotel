<?php
require "conn.php";
session_start();
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
  </head>
  <body>
    
  <?php require "nav.php";?>
  <!-- END nav -->


								  
								 <div class="site-section bg-light">
									  <div class="container">
						<div class="row mb-5 pt-5 justify-content-center">
									
          
		    <div class="col-md-7 text-center section-heading">
			<h2 class="heading">Our Rooms</h2>
		<h6>Comfortable room decorated in pastel tones. Standard rooms are equipped with shower or bathtub and some of them with balcony overlooking hotel garden.</h6>
			</div>
			</div>
			
			
                	
						  
					      <div class="row">
						     <?php
				$stmt_list=$conn->prepare("SELECT * FROM room_detail_list   where status='active' ORDER BY room_detail_id DESC LIMIT 6");
				$stmt_list->execute();
				$row_list=$stmt_list->fetchAll(PDO::FETCH_ASSOC);
				for($i=0;$i<count($row_list);$i++)
				{
				?>
						   
						   
						   
						   
						    <div class="col-lg-4 mb-5">
						   <div class="block-34">
			 
						   
				
					
						
					 
					  <?php  
						$stmt_room=$conn->prepare("SELECT * FROM room_list WHERE room_id=".$row_list[$i]['room_id']);
						$stmt_room->execute();
						$row_room=$stmt_room->fetchAll(PDO::FETCH_ASSOC);
					 ?>
							  <div class="image">
							 <!--<td><img src="admin/images/Rooms/</*?php echo $row_list[$i]['upload_image']; ?*/>"></td>-->
							 <td> <img src="admin/images/Rooms/<?php echo $row_list[$i]['upload_image']; ?>" width="400" height="400"></td>
							  </div>
							  
									  
						
					 
					 <div class="text">
							  <td> <h2 class="heading"><strong><?php echo $row_room[0]['name'];?></strong></h2></td>
							  <ul class="specs mb-5">
							  <ul class="specs mb-5">
							  <!--<li><strong>Price:</*?php echo $row_list[$i]['rate']; ?*/><sub>/per night</sub></strong> </li>-->
							 <div class="price"><strong><sup>Price:  INR</sup></strong><span class="number"><?php echo $row_list[$i]['rate']; ?></span><sub>/per night</sub></div>
								 
								   <li><strong>Facilities:<?php echo $row_list[$i]['facilities']; ?></strong> </li>
								    <li><strong>Category:<?php echo $row_list[$i]['category']; ?></strong> </li>
									 <li><strong>Bed Type:<?php echo $row_list[$i]['bed_type']; ?></strong> </li>
									  <li><strong>Adults:<?php echo $row_list[$i]['adult']; ?></strong> </li>
									   <li><strong>Children:<?php echo $row_list[$i]['children']; ?></strong> </li>
							 
							 <p><a href="gallery.php" class="btn btn-primary py-3 px-5">See More</a></p>
				
    
               </ul>
              </div>
            </div>
          </div>

						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
					    
						
          <!--<div class="col-lg-4 mb-5">
           <div class="block-34">

            
              <div class="text">
			  
              
				
					
              </div>
          </div>
          </div>

         <!-- <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>$</sup><span class="number">375</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

          <!--<div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>$</sup><span class="number">156</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

        <!--  <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_2.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>$</sup><span class="number">245</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

          <!--<div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>$</sup><span class="number">375</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

          <!--<div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_1.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Bachelor Room</h2>
                <div class="price"><sup>$</sup><span class="number">156</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

         <!-- <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_2.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Family Room</h2>
                <div class="price"><sup>$</sup><span class="number">245</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->

          <!--<div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="admin/images/Rooms/img_3.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Presidential Room</h2>
                <div class="price"><sup>$</sup><span class="number">375</span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> 1</li>
                  <li><strong>Categories:</strong> Single</li>
                  <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                  <li><strong>Size:</strong> 20m<sup>2</sup></li>
                  <li><strong>Bed Type:</strong> One bed</li>
                </ul>
              </div>
            </div>
          </div>-->
		  <?php
				}?>
		    </ul>
              </div>
            </div>
          </div>


  
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