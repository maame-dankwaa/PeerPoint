<?php
   include("model/connect_db.php");
   session_start();

   $db = connect_db();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT userID, email,pwd,role FROM users WHERE email = '$myemail'";
      $result = mysqli_query($db,$sql);
      // If result matched $myemail and $mypassword, table row must be 1 row
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1 and password_verify($mypassword,$row["pwd"])) {
         
         $_SESSION['login_user'] = $myemail;
		 $_SESSION['userID'] = $row['userID'];

		 if($row['role'] == 'admin'){
			 header("location: ./view/admin/view");
		 }
		 else{
			header("location: ./view/home.php");
		 } 
		 
      }else {
         $GLOBALS['error'] = '
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script type="text/javascript"> 
            setTimeout(function () {
               swal({
                  title: "Login Failed!",
                  text: "Your username or password is invalid!",
                  icon: "error",
                  button: "Try again",
              });
            }, 2000);
         
            </script>';
      }
   }
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/default.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="./assets/css/styles.css">
	</head>
	
	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="POST" id="login-form">
					<h3>Log In</h3>
					
					<div class="form-holder left">
						<input type="text" name="email" id="email" placeholder="e-mail" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" name="pass" id="pass" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> Forgot <a href="./view/forgot.php">Password?</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button>Login</button>
						<p>Don't Have an account? <a href="view\signup.php">Signup</a></p>
						
					</div>
				</form>
                <div class="image-holder left">
					<img src="./assets/img/ash-images/ashesi-6.jpg" alt="">
				</div>
			</div>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px">
				<?php
					echo @$GLOBALS['error']; ?> 
			</div>
		</div>

		<script src="./assets/js/jquery-3.3.1.min.js"></script>
		<script src="./assets/js/log-main.js"></script>

		 <!-- JS -->
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<script src="./assets/vendor/jquery/jquery-ui.min.js"></script>
		<script src="./assets/vendor/jquery/jquery.validate.js"></script>
		<script src="./assets/js/login.js"></script>
	</body>
</html>