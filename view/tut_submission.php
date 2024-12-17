<?php
  $title = "Submissions | Ashesi PeerPoint"; //title for header
  //include header which uses title
  include_once("../inc/header.php");
  //including navigation header
  include_once("../inc/nav.php");
?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Submit a Tutorial</h2>
        <!--<p>You control what other students watch! </p>-->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

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
                <img src="../assets/img/ash-images/ashesi-5.jpg" alt="">
            </div>
            <form action="../controller/con_submit.php" method="POST" id="signup-form">
                <h3>Waiting on You!</h3>
                <div class="form-holder">
                    <input type="text" name="course-name" id="course-name" placeholder="Course Name" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="text" name="description" id="description" placeholder="Short Description" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="url" name="url" id="url" placeholder="Link" class="form-control" style="font-size: 15px;">
                </div>
                <div class="form-login">
                    <button type="submit" name="signup" id="signup" value="Register">Submit</button>
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
    <script src="../assets/js/submit.js"></script>
		
    </body>
    </html>

          
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

<?php
  //include footer
  include_once("../inc/footer.php");
?>