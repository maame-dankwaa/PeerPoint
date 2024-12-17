    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="home.php">Peer Point </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- =<a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                
                <li><a class=<?php
                                if($title == "Home | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="home.php">Home</a></li>
                <li><a class=<?php
                                if($title == "About | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="about.php">About</a></li>
                <li><a class=<?php
                                if($title == "Courses | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?>  href="courses.php">Courses</a></li>
                <li><a class=<?php
                                if($title == "Submissions | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="tut_submission.php">Submissions</a></li>
                <li><a class=<?php
                                if($title == "Events | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="events.php">Events</a></li>
                

                
            <li><a class=<?php
                                if($title == "Contact | Peer Point"){
                                    echo "active";
                                }
                                else{
                                    echo "null";}
                            ?> href="contact.php">Contact</a></li>
            <li><a href="../controller/logout.php"><span>Log Out</span> <i class="bi bi-chevron-down"></i></a>
                </li>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.php" class="get-started-btn">Get Started</a>

        </div>
    </header><!-- End Header -->