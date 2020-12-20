<?php
session_start();
include_once "conn.php";
date_default_timezone_set("Asia/kolkata"); 
?>
<?php
 require_once "conn.php"; 
 if(isset($_POST['login']))
{
		$usr = "sonal";
        $psw = "12345";
	
		   if ($_POST['name']==$usr  && $_POST['password']==$psw)
		   {
			   header("location:dashboard.php");
		   
}
else{
	echo "<script>alert('Not Successful')</script>" ;
}
}
?>
<html lang="en">
<head>
  <title>Portal Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <style>
 .small{
	  height:350px;
	  width:500px;
	  background-color:white;
	  margin-left:490px;
	  margin-top:180px;
  }
  .large{
  
	  height:30px;
	  background-color:#73d6d6;
	  color:white;
	  padding-top:3px;
	  font-size:20px;
	 text-align:center;
  }
   .big{
	  height:80px;
	  width:480px;
	  background-color:#E0F2F7;
	  margin-top:10px;
	  margin-left:9px;
	  margin-right:0px;
	  
  }
   }
 
  table{
	  margin-left:40px;
	 
  }
  
form{
	margin-top:55px;
}
td{
	font-size:21px;
	padding-top:18px;

}
button{
	padding:14px;
	font-size: 20px;
	background-color:#73d6d6;
	
	
}
</style>
</head>
<body style="background-color:#139e9e;">
<div class="small">
<div class="large">
	 Login
</div>
	 <form action="" method="post">
<table>
<tr>
  <td><p class="thick"> Name</p> </td>
  <td><input type="text" name="name" size="50px"></td>
</tr>
<tr>
 <td><p class="thick">Password</p></td>
 <td><input type="password" name="password" size="50px"></td>
</tr>
</table>
<br>
<div class="d-sm-flex justify-content-between" >
    <div class="form-check col-md-6 text-sm-left text-center">
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">Remember me</label>
     </div>
</div>
	 <br>
<div class="big" align="center" >
	 <button type="submit"  class="btn btn-success" name="login">LOGIN</button>
	 <br>
	<a href="forgot.html" align="center">forgot password?</a>
</div>
 
</form>
</div>
</body>
</html>