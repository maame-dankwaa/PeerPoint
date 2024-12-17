<?php
  $title = "About | Ashesi PeerPoint"; //title for header
  require_once "../model/connect_db.php";
  session_start();

  //include header which uses title
  include_once("../inc/header.php");
  //including navigation header
  include_once("../inc/nav.php");
  
  $db = connect_db();
  $sql = "SELECT COUNT(userID) FROM users WHERE role = 'student'";
  $result = mysqli_query($db,$sql);
  $numStudents = mysqli_fetch_array($result)[0];

  $sql2 = "SELECT COUNT(DISTINCT(courseName)) FROM video";
  $result2 = mysqli_query($db,$sql2);
  $numCourses = mysqli_fetch_array($result2)[0];
?>


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <!--<p>We believe in Ashesi's learning goals and that is why we wanted to build this for our beautiful community. All your lecturers have endorsed this idea so you can trust us that we will deliver. </p>-->
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="description" class="description">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <div class="description-content">
              <p class="fst-italic">
                PeerPoint is a web application designed to help students to upload educational content, engage with and essentially have a summary of how useful 
                the uploaded material is based on the comments provided to inform the resources they use to study.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <!--
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/img/logo/cover.png" class="img-fluid" alt="">
          </div>
-->
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our Goals</h3>
            <!--
            <p class="fst-italic">
              We've all been there. We've witnessed the sighs and cries. We know the struggle of finding extra materials to learn. Above all we understand what it means to provide inclusive and equitable quality education. Our goals include:
            </p>
-->
            <ul>
              <li><i class="bi bi-check-circle"></i> To increase the number of students who pass their courses at Ashesi</li>
              <li><i class="bi bi-check-circle"></i> Eliminate the stress students go through to find their own resources</li>
              <li><i class="bi bi-check-circle"></i> To strengthen the sense of community amongst fellow students through the collective sharing of resources and reviews of courses</li>
            </ul>
            <!--
            <p>
             The Hub believes that all these goals can be achieved. We believe together as one we can build a strong tutorial hub that will serve all future students of Ashesi.
            </p>
-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo htmlspecialchars($numStudents); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo htmlspecialchars($numCourses); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>
<!--
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>
-->

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are students saying</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/testimonials/Akua.jpg" class="testimonial-img" alt="">
                  <h3>Leonette</h3>
                  <h4>Computer Science'22</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
          End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/testimonials/tobbs.jpeg" class="testimonial-img" alt="">
                  <h3>Tobby</h3>
                  <h4>MIS'23</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/testimonials/Sula.jpeg" class="testimonial-img" alt="">
                  <h3>Sula</h3>
                  <h4>CE'24</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/testimonials/dionne.jpeg" class="testimonial-img" alt="">
                  <h3>Dionne</h3>
                  <h4>BA'22</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="../assets/img/testimonials/aisha.jpg" class="testimonial-img" alt="">
                  <h3>Aisha</h3>
                  <h4>EE'23</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section
-->
  </main><!-- End #main -->

<?php
  //include footer
  include_once("../inc/footer.php");
?>