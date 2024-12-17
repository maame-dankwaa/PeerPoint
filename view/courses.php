<?php
  $title = "Courses | Peer Point";
  include_once("../inc/header.php");
  include_once("../inc/nav.php");
  session_start();

  require_once("../controller/get_courses.php");

?>
<main id="main" data-aos="fade-in">

  <section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

      
        <?php
          $json_data = json_courses();

          $decoded_data = json_decode($json_data, true);

          if ($decoded_data) {
            foreach ($decoded_data as $courseName => $videos) {
              echo '<div class="section-title col-lg-12">
                      <h2>' . htmlspecialchars($courseName) . '</h2>
                    </div>';

              foreach ($videos as $item) {
                echo '<div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                          <iframe width="100%" height="60%" src="' . htmlspecialchars($item["vidUrl"]) . '" frameborder="0" allowfullscreen></iframe>
                          <div class="course-content">
                            <a href="video_details.php?vidID=' . htmlspecialchars($item["vidId"]) . ' ">
                              <p>' . htmlspecialchars($item["vidTopic"]) . '</p>
                            </a>
                          </div>
                        </div>
                      </div>';
              }
            }
          } else {
            echo '<p>No courses found.</p>';
          }
        ?>
      </div>

    </div>
  </section></main><?php
  include_once("../inc/footer.php");
?>