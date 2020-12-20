<?php
require "conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$stmt = $conn->prepare("SELECT * FROM room_detail_list WHERE room_detail_id=".$id);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if(isset($_POST['save']))
{
	extract($_POST);
	if($_FILES['upload_image']['name']!="")
	{
	$file_size1=$_FILES['upload_image']['size'];
	$file_name1=$_FILES['upload_image']['name'];
	$file_tmp1=$_FILES['upload_image']['tmp_name'];
	$file_type1=$_FILES['upload_image']['type'];
	$errors1=array();
	$arr1=explode('.',$file_name1);
	$extension1=strtolower(end($arr1));
	//to check extension
	$allowed1=array('jpg','jpeg','png');
	
	//to check size
	
	
	//move_uploaded_file("location od temperory stored file","location where i want to store my file");
	
	$date1=$arr1[0]."_".date('dmYhis').".$extension1";
		if(empty($errors1))
		{
			if(move_uploaded_file($file_tmp1,"images/Rooms/".$date1))	
			{
				//2echo "File uploaded successfully.";
			}
			else
			{
				//echo "File not uploaded";
			}

		}
	}
	else
		{
			$date1=$row[0]['upload_image'];
		}
	
	
	$stmt_update = $conn->prepare('UPDATE room_detail_list SET room_id=:room_id,category=:category,facilities=:facilities,bed_type=:bed_type,adult=:adult,children=:children,rate=:rate,status=:status,upload_image=:upload_image WHERE room_detail_id='.$id);		
	$executed=$stmt_update->execute(array(':room_id' => $room_id,':category' => $category,':facilities' => $facilities ,':bed_type' => $bed_type,':adult' => $adult,':children' => $children,':rate' => $rate,':status'=>$status,':upload_image' => $date1));
	if($executed)
	{
		echo "<script>window.location.href='detail_list.php';</script>";
		
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
  <title>Update Detail</title>
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
                  <ol class="breadcrumb" style="background-color:DodgerBlue;">
                 <li class="breadcrumb-item">
                  <h1 style="padding-left:400px;" class=" text-white">Room Details</h1>
                 </li>
				    <!--<li class="breadcrumb-item">-->
          <!--<a href="dashboard.php">Dashboard</a>
        </li>-->
	      <!-- <li class="breadcrumb-item active">Room types list</li>-->
               </ol>
        
 

<form action="" method="post" enctype="multipart/form-data">
<div class="container">
 
   <div class="form-group col-md-12 row">
  
   <label class="col-md-2" for="room_id" >Room Name:</label>
   
   <?php
		$stmt_list1=$conn->prepare("SELECT * FROM room_list");
		$stmt_list1->execute();
		$row_list1=$stmt_list1->fetchAll(PDO::FETCH_ASSOC);
	  ?>
   
    <?php /*
	
	    $stmt_list1=$conn->prepare("SELECT * FROM room_list where room_id=".$row[0]['room_id']); 
		$stmt_list1->execute();
		$row_list1=$stmt_list1->fetchAll(PDO::FETCH_ASSOC);
	 */?>
	 
     <select class="form-control col-md-10"  name="room_id">
	 
	<?php for($i=0;$i<count($row_list1);$i++){?>
	
	<option value="<?php echo $row_list1[$i]['room_id']?>"<?php if($row_list1[$i]['room_id']==$row[0]['room_id']){echo "selected";}?>><?php if($row_list1[$i]['room_id']){echo $row_list1[$i]['name'];}?></option>
	 
	 <?php }?>
	  </select>
	
      
	
	  
	
  </div>
  
   <div class="form-group col-md-12 row">
    <?php
   	$stmt = $conn->prepare("SELECT * FROM room_detail_list where room_detail_id=".$row[0]['room_detail_id']);
	$stmt->execute();
	$row_list1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  for($i=0;$i<count($row_list1);$i++){?>
   <label for="category" class="col-md-2">Category:</label>
   
  
      <select class="form-control col-md-10"  name="category" >
	  
	 <option class="form-control col-md-10"  name="category"  value="<?php echo $row_list1[0]['category']; ?>"> <?php if($row_list1[$i]['room_detail_id']){echo $row_list1[$i]['category'];}?></option>
<option>Single</option>
        <option>Double</option>
        <option>Triple</option>
		 <?php }?>
      </select>
	  
	  </div>
	  <div class="form-group col-md-12 row" >
	   <?php
   	$stmt = $conn->prepare("SELECT * FROM room_detail_list where room_detail_id=".$row[0]['room_detail_id']);
	$stmt->execute();
	$row_list1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  for($i=0;$i<count($row_list1);$i++){?>
      <label for="facilities" class="col-md-2">Facilities:</label>
	   <select class="form-control col-md-10"  name="facilities" >
      <option class="form-control col-md-10"  name="facilities"  value="<?php echo $row[0]['facilities']; ?>" > <?php if($row_list1[$i]['room_detail_id']){echo $row_list1[$i]['facilities'];}?></option>
	  
	  
	 
        <option>Aircondition</option>
        <option>T.V</option>
        <option>Telephone</option>
		 <option>Coffee and Tea Facilities</option>
		  <option>Safe Box</option>
		
        <?php }?>
      </select>
	  
	  </div>
	    <div class="form-group col-md-12 row">
		<?php
   	$stmt = $conn->prepare("SELECT * FROM room_detail_list where room_detail_id=".$row[0]['room_detail_id']);
	$stmt->execute();
	$row_list1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  for($i=0;$i<count($row_list1);$i++){?>
      <label for="bed_type" class="col-md-2">Bed Type:</label>
      <select class="form-control col-md-10" name="bed_type"  >
	   <option class="form-control col-md-10"  name="facilities"  value="<?php echo $row[0]['bed_type']; ?>" > <?php if($row_list1[$i]['room_detail_id']){echo $row_list1[$i]['bed_type'];}?></option>
	 
        <option>Single Bed</option>
        <option>Double Bed</option>
        <option>Triple Bed</option>
		<?php }?>
		
       
      </select>
	  </div>
	    <div class="form-group col-md-12 row">
		<?php
   	$stmt = $conn->prepare("SELECT * FROM room_detail_list where room_detail_id=".$row[0]['room_detail_id']);
	$stmt->execute();
	$row_list1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  for($i=0;$i<count($row_list1);$i++){?>
      <label for="adult" class="col-md-2">Adult:</label>
      <select class="form-control col-md-10" name="adult"  >
	    <option class="form-control col-md-10"  name="facilities"  value="<?php echo $row[0]['adult']; ?>" > <?php if($row_list1[$i]['room_detail_id']){echo $row_list1[$i]['adult'];}?></option>
	 
        <option>1</option>
        <option>2</option>
        <option>3</option>
		 <option>4</option>
		  <option>5</option>
		
       <?php }?>
      </select>
	  </div>
	   <div class="form-group col-md-12 row">
	   <?php
   	$stmt = $conn->prepare("SELECT * FROM room_detail_list where room_detail_id=".$row[0]['room_detail_id']);
	$stmt->execute();
	$row_list1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
	  for($i=0;$i<count($row_list1);$i++){?>
      <label for="children" class="col-md-2">Children:</label>
      <select class="form-control col-md-10"  name="children" >
	  <option class="form-control col-md-10"  name="facilities"  value="<?php echo $row[0]['children']; ?>" > <?php if($row_list1[$i]['room_detail_id']){echo $row_list1[$i]['children'];}?></option>
	 
	   <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
		 <option>4</option>
		  <option>5</option>
		<?php }?>
       
      </select>
	  </div>
	    <div class="form-group col-md-12 row">
    <label for="rate" class="col-md-2">Rate:</label>
    <input type="text" name="rate" class="form-control col-md-10" value="<?php echo $row[0]['rate']; ?>" > 
  </div>
  <div class="form-group">
            <label  for="exampleInputEmail1" class="col-md-2">Status:</label>
	  Active:
	    <input type="radio" class="flat" name="status" id="genderM" value="active"<?php if($row[0]['status']=='active'){echo "checked";}?>>  
	    Inactive:
	    <input type="radio" class="flat" name="status" id="genderF" value="inactive"<?php if($row[0]['status']=='inactive'){echo "checked";}?>>
          </div>
		  
   
   
  <div class="form-group col-md-12 row">
              <label for="exampleInputEmail1" class="col-md-2">Previous Image:</label>
             
              
<img src="images/Rooms/<?php echo $row[0]['upload_image']; ?>" style="width:100px;height:100px;">
      
     </div> 
	 
		  <div class="form-group col-md-12 row">
            <label for="exampleInputName" class="col-md-2">Upload image:</label>
               <input type="file" name="upload_image"id="file1" multiple>
<input type="hidden" name="upload_image" value="<?php echo $row[0]['upload_image']; ?>" >

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
			<div class="form-group">
                 
                 <button style="margin-left:360px;"class="btn btn-primary btn-lg" type="submit" name="save">Save</button>
				 <button  class="btn btn-primary btn-lg" type="submit" name="cancel" >Cancel</button>
                 
            
		
		
		</div>
		</div>
</div>		
</form>




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

              
           