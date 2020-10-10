<?php
include('header.php');
session_start();
$email="";
$emailerror="";
$password="";
$passworderror="";
if (isset($_POST['login'])) {
	if (!empty($_POST['email'])) {
		$email=$_POST['email'];
		//echo "$email";
	}
	else{
		$emailerror="<span style='color:red'>Please enter  Mail</span>";
	}
	if (!empty($_POST['password'])) {
		$password=$_POST['password'];
	}
	else{
		$passworderror="<span style='color:red'>Please select password</span>";
	}
	if (!empty($email) && !empty($password)) {
		header('location:welcome.php');
	}
}
if (isset($_POST['register'])) {
		header('location:register.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
h1{
	position: relative;
	top:-160px;
	color: blue;
	opacity: 0.3;

	}
</style>
<body>
<h1 style="text-align: center;">LOGIN</h1>
<!--title login-->
<div class="container">
	<h4 style="color: black;" class="font-weight-bold">LOGIN</h4>
	<div style="background-color: darkblue; width: 30px;height: 5px;"></div>
</div>
<!--login form-->
<div class="container bg-light mt-5">
<form method="POST">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="email" class="form-control" value=<?php  echo "$email";?> >
				<span><?php echo $emailerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="text" name="password" class="form-control" value=<?php  echo "$password";?>>
				<span><?php echo $passworderror; ?></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="login" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Login</button>
		<button type="submit" name="register" class="btn-primary p-2" style="text-align: center; border-radius: 5%; border:1px solid blue; width: 100px;">Register</button>
	</div>	
</form>
</div>	
</body>
</html>

