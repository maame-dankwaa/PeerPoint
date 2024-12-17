<?php 
    require "db_cred.php";
    //connects to a local dbms
    function connect_db(){
        // Creating connection
        $conn = mysqli_connect(SERVER, USERNAME, PASSWD ,DATABASE);
        // Checking connection
        if (!$conn) {
            echo "Failed Terribly";
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
?>