<?php
require "conn.php";
if(isset($_POST['save']))
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
		if(move_uploaded_file($file_tmp1,"images/Rooms/".$date1))	
		{
			//echo "File uploaded successfully.";
		}
		else
		{
			//echo "File not uploaded";
		}

	}
	 

	
try{
		$stmt = $conn->prepare("INSERT INTO `room_detail_list`(`room_id`,`category`,`facilities`,`bed_type`,`adult`,`children`,`rate`,`status`,`upload_image`)
		VALUES(:room_id,:category,:facilities,:bed_type,:adult,:children,:rate,:status,:upload_image)");
	

		$executed=$stmt->execute(array(':room_id' => $room_id,':category' => $category,':facilities' => $facilities,':bed_type' => $bed_type,':adult'=>$adult,':children' => $children,
		':rate' => $rate,':status' =>$status,':upload_image'=>$date1));
			   if($executed)
			   {
                  //echo "<script>alert('Added Successfully!!!')</script>" ;
				  echo "<script>window.location.href='detail_list.php';</script>" ;
			   }
			   
	}catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Room Form</title>

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
<!-- Breadcrumbs-->
             <div class="card">
                <div class="card-header"><ol class="breadcrumb" style="background-color:#2ab5b7";>
              
                   <h3 style="padding-left:400px;" class="text-white">Room Details</h3>
                 
				     </ol></div>
 
 <div class="card-body">       			
<form action="" method="post" enctype="multipart/form-data">

<div class="container">
 
   <div class="form-group col-md-12 row">
   
    <label class="col-md-2" for="room_id" >Room Type:</label>
	   <?php
		$stmt_list1=$conn->prepare("SELECT * FROM room_list");
		$stmt_list1->execute();
		$row_list1=$stmt_list1->fetchAll(PDO::FETCH_ASSOC);
	  ?>
     <select class="form-control col-md-10"  name="room_id">
	 <?php for($i=0;$i<count($row_list1);$i++){?>
	  <!--<option value="</*?php echo $row_list1[$i]['room_id']?*/>" name="room_id"></*?php if($row_list1[$i]['room_id']){echo $row_list1[$i]['name'];}?*/></option>-->
	  <option value="<?php echo $row_list1[$i]['room_id'];?>"><?php echo $row_list1[$i]['name'];?></option>
	 <?php }?>
	  </select>
      
  </div>
 
  
   <div class="form-group col-md-12 row">
   <label for="category" class="col-md-2">Category:</label>
      <select class="form-control col-md-10"  name="category">
	    <option>-Select category-</option>
        <option>Single</option>
        <option>Double</option>
        <option>Triple</option>
       
      </select>
	  
	  </div>
	  <div class="form-group col-md-12 row" >
      <label for="facilities" class="col-md-2">Facilities:</label>
      <select class="form-control col-md-10"  name="facilities">
	  <option>-Select facilities-</option>
        <option>Aircondition</option>
        <option>T.V</option>
        <option>Telephone</option>
		 <option>Coffee and Tea Facilities</option>
		  <option>Safe Box</option>
		
       
      </select>
	  
	  </div>
	    <div class="form-group col-md-12 row">
      <label for="bed_type" class="col-md-2">Bed Type:</label>
      <select class="form-control col-md-10" name="bed_type">
	  <option>-Select bed type-</option>
        <option>Single Bed</option>
        <option>Double Bed</option>
        <option>Triple Bed</option>
		
		
       
      </select>
	  </div>
	    <div class="form-group col-md-12 row">
      <label for="adult" class="col-md-2">Adult:</label>
      <select class="form-control col-md-10" name="adult">
	  <option>-Select adult-</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
		 <option>4</option>
		  <option>5</option>
		
       
      </select>
	  </div>
	   <div class="form-group col-md-12 row">
      <label for="children" class="col-md-2">Children:</label>
      <select class="form-control col-md-10"  name="children">
	  <option>-Select children-</option>
	  <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
		 <option>4</option>
		  <option>5</option>
		
       
      </select>
	  </div>
	    <div class="form-group col-md-12 row">
    <label for="rate" class="col-md-2">Rate:</label>
    <input type="text" name="rate" class="form-control col-md-10" >
  </div>
  <div class="form-group">
            <label  for="exampleInputEmail1" class="col-md-2">Status:</label>
	    Active:
	    <input type="radio" class="flat" name="status" id="genderM" value="active">  
	    Inactive:
	    <input type="radio" class="flat" name="status" id="genderF" value="inactive">
          </div>
		  
             
   
  <div class="form-group col-md-12 row">
            <label for="exampleInputName" class="col-md-2">Upload image:</label>
                <input type="file"   id="exampleInputEmail1"  name="upload_image" aria-describedby="emailHelp" id="file1" multiple>
               </div>
               <div class="form-group">
                  <div class="form-row">
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
			  </div>
           </form>
		   
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
