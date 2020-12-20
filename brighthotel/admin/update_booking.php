<?php
require "conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$stmt = $conn->prepare("SELECT * FROM booked_list WHERE booked_id=".$id);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if(isset($_POST['save']))
	{
		$name=$_POST['name'];
		$name=$_POST['room'];
		$name=$_POST['check_in'];
		$name=$_POST['check_out'];
		
		$stmt2=$conn->prepare("UPDATE `booked_list` SET `name`=:name ,`room`=:room ,`check_in`=:check_in ,`check_out`=:check_out WHERE booked_id=$id");
		if ($stmt2->execute(array(':name'=>$name,':room'=>$room,':check_in'=>$check_in,':check_out'=>$check_out)))
		{
			   header("location:booking_list.php");
	    }
	}
	
?>
<html>
<head>
<title>Update Image</title>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
   
    
</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php require"header.php";?>
<div class="content-wrapper">
                <div class="container-fluid">
<!-- Breadcrumbs-->
               <div class="card">
                 <div class="card-header"> <ol class="breadcrumb" style="background-color:#2ab5b7";>
                <!-- <li class="breadcrumb-item">-->
                   <h3 style="padding-left:400px;" class="text-white">Booking Form</h3>
                 <!--</li>-->
				     </ol></div>
			   
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
			   <label for="name">Name</label>
				<input class="form-control" type="text" name="name" placeholder="Enter Name " value="<?php echo $row[0]['name']; ?>" >
                
              </div>
              
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
		  <div class="col-md-12">
      <label for="room" >Rooms:</label>
      <select class="form-control col-md-12"  name="room" value="<?php echo $row[0]['room']; ?>">
	  <option>-Select-</option>
        <option>Bachelor Room</option>
        <option>Family Room</option>
        <option>Presidential Room</option>
		 <option>VIP Room</option>
		  <option>Double Room</option>
		   <option>Triple Room</option>
       
      </select>
	  </div>
	  </div>
	  </div>
	
				 <div class="form-group">
            <div class="form-row">
                 <div class="col-md-12">
                  <label for="check_in">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="check_in"  class="form-control" value="<?php echo $row[0]['check_in']; ?>">
                  </div>
                </div>
				</div>
				</div>
			
			<div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                  <label for="check_out">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="check_out"  class="form-control" value="<?php echo $row[0]['check_out']; ?>">
                  </div>
                </div>
				</div>
				</div>
				
         <script type="text/javascript">
				/*$('#file1').bind('change', function() {
					if((this.files[0].size/1024)>150)
					{
						alert("Image size should be less than 150kb");
						$('#file1').val('');
					}
					
					//alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
				});*/
				var _URL = window.URL || window.webkitURL;

				$("#file1").change(function(e) {
					var file, img;
					if ((file = this.files[0])) {
						img = new Image();
						//alert(file.size/1024);
						img.onload = function() {
							//alert(this.width + " " + this.height);
							if(file.size/1024>1023 || this.width!=1500 || this.height!=1500)
							{
								alert("Image size should be less than 1 MB, height=1500px and width=1500px.");
								$('#file1').val('');
							}
						};
						img.onerror = function() {
							alert( "not a valid file: " + file.type);
						};
						img.src = _URL.createObjectURL(file);
					}

				});
			</script>

              

		 	
         <div class="card-footer"> 
			<div class="form-group">
                 
                 <button style="margin-left:360px;"class=" btn-lg" type="submit" name="save">Save</button>
				 <button  class=" btn-lg" type="submit" name="cancel" >Cancel</button>
                 
            
		
		
		</div>
		</div>
		 </form>
</div>
</div>
</div>
 
 
 <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
                      
					
  

		<div style="height: 1000px;"></div>
                             
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
                   <footer class="sticky-footer">
                         <div class="container">
                             <div class="text-center">
                               <small>Copyright © Your Website 2018</small>
                             </div>
                          </div>
                    </footer>
    <!-- Scroll to Top Button-->
                              <a class="scroll-to-top rounded" href="#page-top">
                                   <i class="fa fa-angle-up"></i>
                              </a>
    <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                    </button>
                              </div>
                 <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                               <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-primary" href="login.html">Logout</a>
                                </div>
                            </div>
                         </div>
                    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
	
	</div>
	

</body>
</html>
