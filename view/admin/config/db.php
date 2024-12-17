<?php
require "db_cred.php";

class DB{
    private $dbHost     = SERVER;
    private $dbUsername = USERNAME;
    private $dbPassword = PASSWD;
    private $dbName     = DATABASE;
 
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }

    public function get_bene_insight(){
        $sql = $this->db->query("SELECT COUNT(*) AS 'Stats', child.bene_id, parent.parentBene_id AS mother, beneficiaries.bene_id, 
        beneficiaries.fname,beneficiaries.mname, beneficiaries.lname, child.parentBene_id
        FROM child, beneficiaries,parent
        WHERE child.parentBene_id = parent.parentBene_id AND beneficiaries.fname IN 
        ( SELECT fname FROM beneficiaries WHERE beneficiaries.bene_id = child.bene_id 
        AND beneficiaries.mname= mname AND beneficiaries.lname = lname)");

        $result = $sql->fetch_assoc();
        return $result['Stats'];

    }

    public function get_staff_insight(){
        $sql = $this->db->query('SELECT count(*) as "Total Staff" , staff_id
        from staff');

        $result = $sql->fetch_assoc();
        return $result['Total Staff'];
    }

    public function get_dev_insight(){
        $sql = $this->db->query('SELECT count(*) as "Dev Gap", child.bene_id,child.development_gap, beneficiaries.bene_id, 
        beneficiaries.fname,beneficiaries.mname, beneficiaries.lname
        from child , beneficiaries 
        where child.development_gap = "Yes" and beneficiaries.fname =  
        ( select fname from beneficiaries where child.bene_id= beneficiaries.bene_id 
        and beneficiaries.mname= mname and beneficiaries.lname = lname)
        order by child.bene_id;');

        $result = $sql->fetch_assoc();
        return $result['Dev Gap'];
    }

    public function get_donor_insight(){
        $sql = $this->db->query('SELECT count(*) as "donors"
        from donors');

        $result = $sql->fetch_assoc();
        return $result['donors'];
    }


  
    
}