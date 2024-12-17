<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once "../model/connect_db.php";
session_start();

// Check if video ID is provided
if (!isset($_GET['vidID'])) {
    header("Location: courses.php");
    exit();
}

$vidID = intval($_GET['vidID']);
$db = connect_db();

// Fetch video details
$sql_video = "SELECT * FROM video WHERE vidId = ?";
$stmt_video = mysqli_prepare($db, $sql_video);
mysqli_stmt_bind_param($stmt_video, "i", $vidID);
mysqli_stmt_execute($stmt_video);
$result_video = mysqli_stmt_get_result($stmt_video);
$video = mysqli_fetch_assoc($result_video);
try{
    // Handle comment submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['userID'])) {
        $comment_author = $_SESSION['userID']; // Author ID from session
        $comment_text = trim($_POST['comment']); // User's comment
        $vidID = intval($_GET['vidID']);

        // Validate comment input
        if (empty($comment_text)) {
            echo "<script>alert('Comment cannot be empty');</script>";
        } else {
            // Insert comment into database
            $sql_comment = "INSERT INTO comments (author, vidID, label) VALUES (?, ?, ?)";
            $stmt_comment = mysqli_prepare($db, $sql_comment);
            if ($stmt_comment === false) {
                echo "Error preparing statement: " . mysqli_error($db);
                exit();
            }

            mysqli_stmt_bind_param($stmt_comment, "iis", $comment_author, $vidID, $comment_text);

            if (mysqli_stmt_execute($stmt_comment)) {
                // Redirect to prevent form resubmission
                header("Location: video_details.php?vidID=" . $vidID);
                exit();
            } else {
                echo "Error inserting comment: " . mysqli_error($db);
                exit();
            }
        }
    }
}catch(Exception $e){
    echo 'Error: '. $e->getMessage();
    error_log($e->getMessage(), 3, 'error.log');
}
// Fetch comments for this video
$sql_comments = "SELECT c.*, u.fName, u.lName 
                 FROM comments c 
                 JOIN users u ON c.author = u.userID 
                 WHERE c.vidID = ? 
                 ORDER BY c.dateCreated DESC";
$stmt_comments = mysqli_prepare($db, $sql_comments);
mysqli_stmt_bind_param($stmt_comments, "i", $vidID);
mysqli_stmt_execute($stmt_comments);
$result_comments = mysqli_stmt_get_result($stmt_comments);

$title = htmlspecialchars($video['vidTopic']) . " | Peer Point";
include_once("../inc/header.php");
include_once("../inc/nav.php");
?>

<main id="main">
    <section class="video-details">
        <div class="container">
            <div class="row">
                <div class="section-title col-lg-8">
                    <h2><?php echo htmlspecialchars($video['vidTopic']); ?></h2>
                    <iframe width="100%" height="500" src="<?php echo htmlspecialchars($video['vidURL']); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                
                <div class="col-lg-4 section-title">
                    <h2>Comments</h2>
                    
                    <?php if(isset($_SESSION['userID'])): ?>
                        <form method="POST" action="">
                            <textarea name="comment" class="form-control" placeholder="Enter your comment"></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </form>
                    <?php endif; ?>

                    <div class="comments-list mt-4">
                        <?php while($comment = mysqli_fetch_assoc($result_comments)): ?>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mb-3">
                                <strong><?php echo htmlspecialchars($comment['fName'] . ' ' . $comment['lName']); ?></strong>
                                <small class="text-muted"><?php echo date('F j, Y, g:i a', strtotime($comment['dateCreated'])); ?></small>
                                <p><?php echo nl2br(htmlspecialchars(ucwords(strtolower($comment['label'])))); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once("../inc/footer.php");
?>
