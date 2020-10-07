<?php
session_start();
		if (isset($_POST['username']) && isset($_POST['password'])) {
			if($_POST['username']=="admin" && $_POST['password']=="test@123"){
			header('location:welcome.php');
			}
			else{
				$_SESSION['error']="invalid";
				echo $_SESSION['error'];
				
			}


		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet" />
    <link href="css/css/style.css" rel="stylesheet">
    <link href="css/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="" method="POST">
		        <h2 class="form-login-heading">Host Myanmar(Mandalay)</h2>
                  
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
		            <input  name="login" class="btn btn-theme btn-block" type="submit">
		            <input name="register" class="text-center" type="submit" placeholder="register"></button>
              <?php
              if (isset($_SESSION['error'])) {
              	if ($_SESSION['error']=="invalid") {
              	echo "<span style='color:red'>invalid username and password</span>";	
              	}
              	
              }
              if (isset($_POST['register'])) {
              	header('location:register.php');
              }
              ?>
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    


  </body>
</html>
<?php
unset($_SESSION['error']);
?>