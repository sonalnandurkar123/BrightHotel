<?php
require "conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$stmt = $conn->prepare("SELECT * FROM designation_list WHERE designation_id=".$id);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
if(isset($_POST['save']))
	{
		$name=$_POST['name'];
		
		$stmt2=$conn->prepare("UPDATE `designation_list` SET `name`=:name WHERE designation_id=$id");
		if ($stmt2->execute(array(':name'=>$name)))
		{
			   header("location:designation_list.php");
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

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php require"header.php";?>
<div class="content-wrapper">
                <div class="container-fluid">
                   <div class="card">
                 <div class="card-header"> <ol class="breadcrumb" style="background-color:#2ab5b7";>
                <!-- <li class="breadcrumb-item">-->
                   <h3 style="padding-left:400px;" class="text-white">Designation Form</h3>
                 <!--</li>-->
				     </ol></div>
			   
        
        
  
          
        
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
			   <label for="exampleInputName">Name</label>
				<input class="form-control" type="text" name="name" placeholder="Enter Name of Designation" value="<?php echo $row[0]['name']; ?>" >
                
              </div>
              
            </div>
          </div>
         

		  
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
















