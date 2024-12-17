<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    $id = $_POST['id'];
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $sqlUpdate = "UPDATE events SET event_name ='" . $title . "',event_date='" . $start . "' WHERE event_id=" . $id;
    mysqli_query($connect, $sqlUpdate);
    mysqli_close($connect);
?>