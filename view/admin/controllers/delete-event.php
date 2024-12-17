<?php
    require_once "../config/connect_db.php";

    $connect = connect_db(); //establishing a connection to db

    $id = $_POST['id'];
    $sqlDelete = "DELETE from events WHERE event_id=".$id;

    mysqli_query($connect, $sqlDelete);
    echo mysqli_affected_rows($connect);

    mysqli_close($connect);
?>