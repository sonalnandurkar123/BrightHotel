<?php
require "conn.php";
if(isset($_POST['submit']))
{
   
	extract($_POST);
	
	
	//print_r($_FILES);exit;
	$file_size1=$_FILES['upload_image']['size'];
	$file_name1=$_FILES['upload_image']['name'];
	$file_tmp1=$_FILES['upload_image']['tmp_name'];
	$file_type1=$_FILES['upload_image']['type'];
	$errors1=array();
	$arr1=explode('.',$file_name1);
	$extension1=strtolower(end($arr1));
	//to check extension
	$allowed1=array('jpg','jpeg','png');
	/*if(!in_array($extension1,$allowed1))
	{
		$errors1[0]="extension not allowed,please choose jpg, jpeg or png file.";
		
	}*/
	//to check size
	/*if($file_size1>1536000)
	{
		$errors[1]="size should be less than 150kb";
	}*/
	
	//move_uploaded_file("location od temperory stored file","location where i want to store my file");
	
	$date1=$arr1[0]."_".date('dmYhis').".$extension1";
	if(empty($errors1))
	{
		if(move_uploaded_file($file_tmp1,"images/slider/".$date1))	
		{
			//echo "File uploaded successfully.";
		}
		else
		{
			//echo "File not uploaded";
		}

	}
	 

	
try{
		$stmt = $conn->prepare("INSERT INTO `slider_list`(`name`,`status`,`upload_image`)VALUES(:name,:status,:upload_image)");

		$executed=$stmt->execute(array(':name' => $name,':status' => $status,':upload_image' => $date1));
			   if($executed)
			   {
				   header("location:img_list.php");
                  //echo "<script>alert('Added Successfully!!!')</script>" ;
				  //echo "<script>window.location.href='img_list';</script>" ;
			   }
			   
	}catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>upload image</title>

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
 
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php require"header.php";?>
<div class="content-wrapper">
                <div class="container-fluid">
                   <div class="card">
                 <div class="card-header"> <ol class="breadcrumb" style="background-color:#2ab5b7";>
                <!-- <li class="breadcrumb-item">-->
                   <h3 style="padding-left:400px;" class="text-white">Add Image</h3>
                 <!--</li>-->
				     </ol></div>
			   
        
        

  
          
        
			   
 
	<div class="card-body">		   
<form action="" method="post" enctype="multipart/form-data">

	    <div class="form-group col-md-12 row">
    <label for="name" class="col-md-2">Image Name:</label>
    <input type="text" name="name" class="form-control col-md-10" >
  </div>


              
            
          
         
		  <div class="form-group col-md-12 row">
            <label  for="upload_image" class="col-md-2">Upload image:</label>
                <input   id="exampleInputEmail1" type="file" name="upload_image" aria-describedby="emailHelp" id="file1" multiple>
               </div>
			     
		  <div class="form-group">
            <label  for="exampleInputEmail1" class="col-md-2">Status:</label>
	    Active:
	    <input type="radio" class="flat" name="status" id="genderM" value="active">  
	    Inactive:
	    <input type="radio" class="flat" name="status" id="genderF" value="inactive">
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
			<br>
            
			<div class="card-footer"> 
			<div class="form-group">
                 
                 <button style="margin-left:360px;"class=" btn-lg" type="submit" name="submit">Save</button>
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

              
           