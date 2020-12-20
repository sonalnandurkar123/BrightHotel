<?php
include_once "conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Brighthotel</title>
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



      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/fancybox.min.css">
      
      <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

      <!-- Theme Style -->
      <link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
    
  <?php require "nav.php";?>
  <!-- END nav -->
  
  
  
  <div class="block-31" style="position: relative;">
  
		  
    <div class="owl-carousel loop-block-31 ">
	
<div  class="block-30 item" style="background-image: url('admin/images/slider/blog_1.jpg');" data-stellar-background-ratio="0.5">

  <div class="welcome-content h-100">
        
                    <div class="container h-100">
					
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms" class="text-white">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" class="text-white"style="font-size:100px">Welcome To Brighthotel</h2>
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				</div>
			
				
				  
				 <div class="block-30 item" style="background-image: url('admin/images/slider/bg_1.jpg');" data-stellar-background-ratio="0.5">
				 
				 <div class="welcome-content h-100">
				 
				 
				 
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                           <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms" class="text-white">Hotel &amp; Resort</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms" class="text-white"style="font-size:100px">Welcome To Brighthotel</h2>
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
					
                </div>
				 </div>
        
    
	 
	 
	  
        <?php /*
			$stmt_slider=$conn->prepare("SELECT * FROM slider_list where status='active' ORDER BY slider_id DESC LIMIT 2");
			$stmt_slider->execute();
			$row_slider=$stmt_slider->fetchAll(PDO::FETCH_ASSOC);
				for($i=0;$i<count($row_slider);$i++)
					{
					
	  */?>
	
		
	
		 

	 
	    </div>
  </div>
			
	 
     
			
	
	 
              
			
			<!--<img src="admin/images/slider/</*?php echo $row_slider[$i]['upload_image']?*/>" alt=" "/>-->
			<!--</div>
	 
	    </div>
  </div>-->
  
	  
	 
		 
	  	
   


  <div class="container">
 

 
  <section class="section bg-light pb-0"  >
        <div class="container">
         
          <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

              <form action="#">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="icon-calendar"></span></div>
                      <input type="text" id="checkin_date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="icon-calendar"></span></div>
                      <input type="text" id="checkout_date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                    <div class="row">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label for="adults" class="font-weight-bold text-black">Adults</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="adults" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4+</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label for="children" class="font-weight-bold text-black">Children</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="children" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 align-self-end">
                    <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                  </div>
                </div>
              </form>
            </div>


          </div>
		   
        </div>
      </section>
	   <section class="py-5 bg-light" id="section-about">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
              <img src="admin/images/slider-6.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
              <h1 class="heading mb-4"><dt>Hey there!</dt></h1>
              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="btn btn-primary text-white py-2 mr-3 text-uppercase letter-spacing-1">Watch the video</a></p>
            </div>
            
          </div>
        </div>
      </section>
	  

	  
	  
	  
	 <!-- <div class="site-section block-13 bg-light">
      <div class="container">-->
	  <!-- <div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <!--<div class="carousel-inner">
      <div class="item active">
        <img src="images/slider-6.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/menu_1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/menu_2.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
   <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	  
	  <!--</div>
	  </div>-->
      
      
      <div class="row site-section">
	  <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Services</span>
              <h2 class="heading">Facilities &amp; Services</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-double-bed"></span></div>
            <div class="media-body">
              <h3 class="heading">Luxury Rooms</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-wifi"></span></div>
            <div class="media-body">
              <h3 class="heading">Fast &amp; Free Wifi</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-customer-service"></span></div>
            <div class="media-body">
              <h3 class="heading">Call Us 24/7</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-taxi"></span></div>
            <div class="media-body">
              <h3 class="heading">Travel Accomodation</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-credit-card"></span></div>
            <div class="media-body">
              <h3 class="heading">Accepts Credit Card</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-dinner"></span></div>
            <div class="media-body">
              <h3 class="heading">Restaurant</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section block-13 bg-light">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Featured Rooms</span>
              <h2 class="heading">Rooms &amp; Suites</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, iusto, omnis! Quidem, sint, impedit? Dicta eaque delectus tempora hic, corporis velit doloremque quod quam laborum, nobis iusto autem culpa quaerat!</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
                  <div class="item">
                    <div class="block-34">
                      <div class="image">
					   
	 
                        <a href="#"><img src="admin/images/Rooms/img_1.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Bachelor Room</h2>
						
                        <div class="price"><sup>INR</sup><span class="number">2000</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
					 
                       <a href="#"><img src="admin/images/Rooms/img_2.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Family Room</h2>
                        <div class="price"><sup>INR</sup><span class="number">2000</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
					  
                      <a href="#"><img src="admin/images/Rooms/img_3.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Presidential Room</h2>
                        <div class="price"><sup>INR</sup><span class="number">2500</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="admin/images/Rooms/img_4.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">Double Room</h2>
                        <div class="price"><sup>INR</sup><span class="number">2000</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="admin/images/Rooms/img_5.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">VIP Room</h2>
                        <div class="price"><sup>INR</sup><span class="number">2000</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="#"><img src="admin/images/Rooms/img_6.jpg" alt="Image placeholder"></a>
                      </div>
                      <div class="text">
                        <h2 class="heading">VIP Room</h2>
                        <div class="price"><sup>INR</sup><span class="number">2500</span><sub>/per night</sub></div>
                        <ul class="specs">
                          <li><strong>Adults:</strong> 1</li>
                          <li><strong>Categories:</strong> Single</li>
                          <li><strong>Facilities:</strong> Closet with hangers, HD flat-screen TV, Telephone</li>
                          <li><strong>Size:</strong> 20m<sup>2</sup></li>
                          <li><strong>Bed Type:</strong> One bed</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
              </div>
    
            </div> <!-- .col-md-12 -->
          </div>
      </div>
    </div>
	
   <section  class="section bg-image overlay"  style="background-image: url('admin/images/menu/menu_4.jpg');" id="section-menus">
  
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h1 class="heading text-white" data-aos="fade"><dt>Our Restaurant Menu</dt></h1>
              <p class="text-white" data-aos="fade" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
          <div class="food-menu-tabs" data-aos="fade">
            <ul class="nav nav-tabs mb-5" id="myTab" role="tablist" style="font-size:24px;" >
              <li class="nav-item">
               <b> <a class="nav-link active letter-spacing-2"  id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">Food</a></b>
              </li>
              <li class="nav-item ">
               <b> <a class="nav-link  letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a></b>
              </li>
              <li class="nav-item">
               <b> <a class="nav-link  letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a></b>
              </li>
            </ul>
            <div class="tab-content py-5" id="myTabContent">
              
              
              <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
                <div class="row">
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                     <b> <span class="d-block text-black h4 mb-3">$20.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3></b>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$35.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$15.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$10.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$8.35</span>
                      <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$22.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                </div>
                

              </div> <!-- .tab-pane -->

              <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
                <div class="row">
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$11.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$72.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$26.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$42.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$7.35</span>
                      <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$22.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                </div>
              </div> <!-- .tab-pane -->
              <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                <div class="row">
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$32.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$14.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$93.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$18.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$38.35</span>
                      <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="food-menu mb-5">
                      <span class="d-block text-black h4 mb-3">$69.00</span>
                      <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                      <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                </div>
              </div> <!-- .tab-pane -->
            </div>
          </div>
        </div>
      </section>
	  
    <!--<div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Menus</span>
              <h2 class="heading">Restaurant Menu</h2>
            </div>
          </div>

        <div class="block-35">
          
          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Lunch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Dinner</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Asparagus</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">30.50</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Grilled Top Sirloin Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">23.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Egg &amp; Grilled Steak</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">45.45</span></div>
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="admin/images/menu/menu_4.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Spicy Noodles</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!</p>
                          <div class="price"><sup>$</sup><span class="number">33.45</span></div>
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>-->


    <!--<div class="block-30 block-30-sm item"  style="background-image: url('admin/images/slider-6.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <h2 class="heading">Quality accommodation that exceeds the expectations</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>-->

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