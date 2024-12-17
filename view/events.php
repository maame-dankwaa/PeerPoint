<?php
$title = 'Events | Peer Point'; //title for header
//include header which uses title
include_once '../inc/header.php';
//including navigation header
include_once '../inc/nav.php';

// Connect to database
require_once "../model/connect_db.php";
$db = connect_db();

// Fetch events from database
$sql = "SELECT * FROM events ORDER BY event_date ASC";
$result = mysqli_query($db, $sql);
?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Find opportunities in the opportunities that have found you</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <?php 
          // Check if there are any events
          if (mysqli_num_rows($result) > 0) {
            // Static image array to cycle through
            $images = [
              '../assets/img/events-1.jpg',
              '../assets/img/events-2.jpg',
              '../assets/img/events-3.jpg',
              '../assets/img/events-4.jpg'
            ];
            $image_index = 0;

            // Loop through events and create cards
            while ($event = mysqli_fetch_assoc($result)) {
              // Cycle through images
              $event_image = $images[$image_index % count($images)];
              $image_index++;

              // Format date
              $formatted_date = date('l, F j\t\h', strtotime($event['event_date']));

              echo '<div class="col-md-6 d-flex align-items-stretch">
                      <div class="card">
                        <div class="card-img">
                          <img src="' . htmlspecialchars($event_image) . '" alt="' . htmlspecialchars($event['event_name']) . '">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><a>' . htmlspecialchars($event['event_name']) . '</a></h5>
                          <p class="fst-italic text-center">' . htmlspecialchars($formatted_date) . '</p>
                          <p class="card-text text-center">' . htmlspecialchars($event['event_goal']) . '</p>
                        </div>
                      </div>
                    </div>';
            }
          } else {
            // Display a message if no events are found
            echo '<div class="col-12 text-center">
                    <p>No upcoming events at the moment.</p>
                  </div>';
          }
          ?>
        </div>
      </div>
    </section><!-- End Events Section -->
</main><!-- End #main -->

<?php 
// Close database connection
mysqli_close($db);

//include footer
include_once '../inc/footer.php'; 
?>