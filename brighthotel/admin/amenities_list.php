<?php
require "conn.php";
if(isset($_GET['del_id']))
	{		$del_id=$_GET['del_id'];	
			$stmt=$conn->prepare("DELETE FROM amenities_list WHERE amenities_id=$del_id");		
			$stmt->execute();	
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Amenities list</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require "header.php"; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>&nbsp;Amenities List</div>
        <div class="card-body">
          <div class="table-responsive">
		  <?php
				$stmt_list=$conn->prepare("SELECT * FROM amenities_list");
				$stmt_list->execute();
				$row_list=$stmt_list->fetchAll(PDO::FETCH_ASSOC);
				?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>Name</th>
				 <th>Description</th>
                  <th>Image</th>
				  <th>Status</th>
                  <th>Action</th>
                 
                </tr>
              </thead>
              <tbody>
                 
					<?php
					for($i=0;$i<count($row_list);$i++)
				    {
					?>
                      <tr>
                        <td><?php echo $i+1;?></td>
						<td><?php echo $row_list[$i]['name']; ?></td>
                      <td><?php echo $row_list[$i]['description']; ?></td>
						<td><img src="images/amenities/<?php echo $row_list[$i]['upload_image']; ?>" width="100px" height="100px"></td>
						<td><?php echo $row_list[$i]['status']; ?></td>
						<td>
						<a href="update_amenities.php?id=<?php echo $row_list[$i]['amenities_id']; ?>"><button>Update</button></a>
						<a href="amenities_list.php?del_id=<?php echo $row_list[$i]['amenities_id']; ?>" onclick="return confirm('Are you sure you want to delete this?');"><button>Delete</button></a>
						</td>
                      </tr>
					<?php
					}
					?>
                    
              </tbody>
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
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
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>

