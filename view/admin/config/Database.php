<?php
require "../config/db_cred.php";
class Database{
	
	private $host  = SERVER;
    private $user  = USERNAME;
    private $password = PASSWD;
    private $database  = DATABASE; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>