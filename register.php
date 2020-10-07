<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Admin | Login</title>
    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet" />
    <link href="css/css/style.css" rel="stylesheet">
    <link href="css/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <form action="" action="" method="POST">
	  	<input type="text" name="username" placeholder="username"><br>
	  	<input type="text" name="email" placeholder="email"><br>
	  	<input type="number" name="phone" placeholder="phone"><br>
	  	<input type="text" name="password" placeholder="password"><br>
	  	<input type="text" name="confirm" placeholder="confirm password"><br>
	  	
	  	<input type="submit" name="register1" placeholder="register"><br>
	  </form>
	  <?php
	  if (isset($_POST['register1'])) {
	  	$name=$_POST['username'];
	  	$email=$_POST['email'];
	  	$phone=$_POST['phone'];
	  	$password=$_POST['password'];
	  	$confirm=$_POST['confirm'];
	  	if ($name!=""&& $email!="" &&$phone!="" && $password!="" && $confirm==$password) {
	  		session_start();
$_SESSION['user']=$name;
	  	$_SESSION['ema']=$email;
	  	$_SESSION['ph']=$phone;
	  	$_SESSION['psw']=$password;
	  	$_SESSION['con']=$confirm;
	  	
		header('location:table.php');
	  		
	  	}
	  	else{
	  	$_SESSION['error']="invalid";
	  	echo $_SESSION['error'];	
	  	}
	  	
	  }
	  ?>
	
  </body>
</html>
