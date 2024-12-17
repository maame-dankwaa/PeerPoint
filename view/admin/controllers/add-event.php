<?php
require_once "../config/connect_db.php";

$connect = connect_db(); //establishing a connection to db

$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$end = isset($_POST['end']) ? $_POST['end'] : "";
$goal = isset($_POST['goal']) ? $_POST['goal'] : "";

$sqlInsert = "INSERT INTO events (event_date,event_name,event_goal) VALUES ('".$start."','".$title."','".$goal."')";

$result = mysqli_query($connect, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>