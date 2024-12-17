<?php
require_once "../model/connect_db.php";
session_start();
    //function to return json of courses
    function json_courses(){
        $db = connect_db();

        $sql = "SELECT vidId,vidTopic,vidUrl,approved,courseName FROM video";
        $result = mysqli_query($db,$sql);
        // If result matched $myemail and $mypassword, table row must be 1 row
        $rows = array();
         
        while($row = mysqli_fetch_assoc($result)) {
            if($row['approved'] == 'yes'){
                $courseName = $row['courseName'];
                if (!isset($rows[$courseName])) {
                    $rows[$courseName] = [];
                }
                $rows[$courseName][] = $row; // Add the video to the respective course
            }
        }
        
        return json_encode($rows);
        
    }

    
?>
