<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Signup</title>
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
        <div class="inner">
            <div class="image-holder">
                <img src="../assets/img/ash-images/ashesi-6.jpg" alt="">
            </div>
            <form action="../controller/con_home.php" method="POST" id="signup-form">
                <h3>Sign Up</h3>
                <div class="form-group">
                    <div class="form-wrapper form-holder active">
                        <input type="text" name="f-name" id="f-name" placeholder="first name" class="form-control">
                    </div>
                    <div class="form-wrapper form-holder">
                        <input type="text" name="l-name" id="l-name" placeholder="last name" class="form-control">
                    </div>
                </div>
                
                <div class="form-holder">
                    <input type="text" name="email" id="email" placeholder="e-mail" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" style="font-size: 15px;">
                </div>
                <div class="form-holder">
                    <input type="password" name="re_pass" id="re_pass" placeholder="confirm password" class="form-control" style="font-size: 15px;">
                </div>
                <div class="form-login">
                    <button type="submit" name="signup" id="signup" value="Register">Sign up</button>
                    <p>Already Have account? <a href="../index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/log-main.js"></script>
    
    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/jquery/jquery-ui.min.js"></script>
	<script src="../assets/vendor/jquery/jquery.validate.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/script.js"></script>
		
</body>
</html>