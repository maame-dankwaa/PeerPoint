<?php
require_once "../model/connect_db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] =="POST"){
   
    $email = $_POST['email'];

    $connect = connect_db();

    $sql = "SELECT email FROM users WHERE email = '$email'";

    $result = mysqli_query($connect,$sql) or die ( mysqli_error($connect));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    // If result matched $email, table row must be 1 row
        
    if($count == 1) {
        $_SESSION['forget_user'] = $email;
        header("location: ../view/reset.php");
    }
    else {
        $GLOBALS['error'] = '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript"> 
           setTimeout(function () {
              swal({
                 title: "Validation Failed!",
                 text: "Your username is invalid!",
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

		<title>Forgot Password</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/default.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="../assets/css/styles.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner no-img">
				<form action="" method="POST" id="forgot-form">
					<h3>Forgot Password</h3>
					
					<div class="form-holder left active">
						<input type="text" placeholder="e-mail(Username)" name="email" id="email" class="form-control">
					</div>
					<div class="form-login">
						<button>Forgot Password</button>
						<p>Have an account? <a href="../index.php">Login</a></p>
					</div>
                </form>
			</div>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px">
				<?php
					echo @$GLOBALS['error']; ?> 
			</div>
		</div>

		<script src="../assets/js/jquery-3.3.1.min.js"></script>
	    <script src="../assets/js/log-main.js"></script>
    
        <!-- JS -->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
	    <script src="../assets/vendor/jquery/jquery-ui.min.js"></script>
	    <script src="../assets/vendor/jquery/jquery.validate.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/js/forgot.js"></script>
	</body>
</html>