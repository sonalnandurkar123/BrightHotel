<?php
require "conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$stmt = $conn->prepare("SELECT * FROM employee_list WHERE employee_id=".$id);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if(isset($_POST['save']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$mobile=$_POST['mobile'];
		$gender=$_POST['gender'];
		$department=$_POST['department'];
		$designation=$_POST['designation'];
		$region=$_POST['region'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$id_card=$_POST['id_card'];
		$id_no=$_POST['id_no'];
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		
		$stmt2=$conn->prepare("UPDATE `employee_list` SET `firstname`=:firstname,`lastname`=:lastname ,`address`=:address,`email`=:email,`dob`=:dob,
	`mobile`=:mobile,`gender`=:gender,`department`=:department,`designation`=:designation,`region`=:region,`city`=:city,`country`=:country,`id_card`=:id_card,`id_no`=:id_no,
`username`=:username,`password`=:password WHERE employee_id=$id");
		if ($stmt2->execute(array(':firstname'=>$firstname,':lastname'=>$lastname,':address'=>$address,':email'=>$email,':dob'=>$dob,':mobile'=>$mobile,':gender'=>$gender,
		':department'=>$department,':designation'=>$designation,':region'=>$region,':city'=>$city,':country'=>$country,':id_card'=>$id_card,':id_no'=>$id_no,':username'=>$username,':password'=>$password)))
		{
			   header("location:employee_list.php");
	    }
	}
	
	
	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Update Employee</title>
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
              
                   <h3 style="padding-left:400px;" class="text-white">Employee Form</h3>
                 
				     </ol></div>
 <div class="card-body">
 

<form action="" method="post" enctype="multipart/form-data">

<div class="container">
 
   
     <div class="form-group">
	 <div class="form-row">
    <div class="col-md-6">
   
    <label  for="firstname" >FirstName:</label>
    <input type="text" name="firstname" class="form-control col-md-10" value="<?php echo $row[0]['firstname']; ?>">
  
  </div>
  
   
   <div class="col-md-6">
    <label  for="lastname" >LastName:</label>
    <input type="text" name="lastname" class="form-control col-md-10"value="<?php echo $row[0]['lastname']; ?>"  >
  
  
  </div>
 
  <div class="col-md-6">
    <label  for="address">Address:</label>
    <input type="text" name="address"  class="form-control col-md-10"value="<?php echo $row[0]['address']; ?>" >
  
  </div>
  <div class="col-md-6">
    <label  for="email">Email Address:</label>
    <input type="text" name="email" class="form-control col-md-10"value="<?php echo $row[0]['email']; ?>" >
  
  </div>
  <div class="col-md-6">
    <label  for="mobile">Mobile:</label>
    <input type="text" name="mobile" value="-91" class="form-control col-md-10"value="<?php echo $row[0]['mobile']; ?>" >
  
  </div>
   <div class="col-md-6">
    <label  for="dob">D.O.B:</label>
    <input type="text" name="dob" class="form-control col-md-10" value="<?php echo $row[0]['dob']; ?>">
  
  </div>
   <div class="col-md-6">
    <label for="city">City:</label>
    <input type="text" name="city" class="form-control col-md-10"value="<?php echo $row[0]['city']; ?>" >
  
  </div>
  
  <div class="col-md-6">
    <label  for="region">Region:</label>
    <input type="text" name="region"  class="form-control col-md-10" value="<?php echo $row[0]['region']; ?>" >
  
  </div>
 
   <div class="col-md-6">
      <label for="department" >Department:</label>
      <select class="form-control col-md-10"  name="department" value="<?php echo $row[0]['department']; ?>">
	  <option>-Select-</option>
        <option>Finance Department</option>
        <option>It Department</option>
        <option>Customer Care</option>
       
      </select>
	  </div>
	    <div class="col-md-6">
      <label for="designation"  >Designation:</label>
      <select class="form-control col-md-10"  name="designation" value="<?php echo $row[0]['designation']; ?>">
	  <option>-Select-</option>
        <option>Aircondition</option>
        <option>T.V</option>
        <option>Telephone</option>
		 <option>Coffee and Tea Facilities</option>
		  <option>Safe Box</option>
		
       
      </select>
	  </div>
	 <div class="col-md-6">
    <label  for="id_card">ID card:</label>
    <input type="text" name="id_card" class="form-control col-md-10" value="<?php echo $row[0]['id_card']; ?>" >
  
  </div>
  <div class="col-md-6">
    <label  for="id_no">ID Number :</label>
    <input type="text" name="id_no" class="form-control col-md-10" value="<?php echo $row[0]['id_no']; ?>">
  
  </div>
  <div class="col-md-6">
    <label  for="country">Country:</label>
    <input type="text" name="country"  class="form-control col-md-10" value="<?php echo $row[0]['country']; ?>" >
  
  </div>
  <div class="col-md-6">
    <label for="gender">Gender:</label><br>
   <input type="radio" name="gender" value="male" <?php if(isset($row[0]['gender']) && $row[0]['gender']=='male') {echo "checked";}?>>male
<input type="radio" name="gender" value="female" <?php if(isset($row[0]['gender']) && $row[0]['gender']=='female') {echo "checked";}?>>female
  </div>
   <div class="col-md-6">
    <label  for="username">Username:</label>
    <input type="text" name="username" class="form-control col-md-10" value="<?php echo $row[0]['username']; ?>" >
  
  </div>
  <div class="col-md-6">
    <label  for="password">Password:</label>
    <input type="password" name="password"  class="form-control col-md-10" value="<?php echo $row[0]['password']; ?>" >
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
			   </div>
           </form>
		   </div> 
		   </div>
		   </div>
					
  

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
