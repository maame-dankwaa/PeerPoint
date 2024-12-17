<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    try{
        require_once "../config/connect_db.php";

        $connect = connect_db(); //establishing a connection to db

        $json = array(); //encode query results here
        $sql = "SELECT * FROM events ORDER BY event_id";

        $result = mysqli_query($connect, $sql);
        $event_array = array();

        foreach($result as $row){
            $event_array[] = array(
            'id'   => $row["event_id"],
            'title'   => $row["event_name"],
            'start'   => $row["event_date"],
            'end'   => $row["event_date"]
            );
    }
        mysqli_free_result($result); //freeing memory associated with result

        mysqli_close($connect);
        echo json_encode($event_array);
}catch(Exception $e){
    echo 'Error: '. $e->getMessage();
    error_log($e->getMessage(), 3, 'error.log');
}

?>