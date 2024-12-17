<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Reset Password</title>
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
				<form action="../controller/con_reset.php" method="POST" id="reset-form">
					<h3>Reset Password</h3>
					
					<div class="form-holder left active">
						<input type="password" placeholder="New Password" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="form-holder left">
						<input type="password" placeholder="Confirm Password" name="re_pass" id="re_pass" class="form-control">
					</div>
					<div class="form-login">
						<button>Reset Password</button>
                </form>
                
			</div>
		</div>

		<script src="./assets/js/jquery-3.3.1.min.js"></script>
		<script src="../assets/js/log-main.js"></script>

		 <!-- JS -->
		<script src="../assets/vendor/jquery/jquery.min.js"></script>
		<script src="../assets/vendor/jquery/jquery-ui.min.js"></script>
		<script src="../assets/vendor/jquery/jquery.validate.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<script src="../assets/js/reset.js"></script>

	</body>
</html>