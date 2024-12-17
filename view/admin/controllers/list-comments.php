
<?php
include_once '../config/Database.php';
include_once '../class/Records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(isset($_POST)){
    $record->listComments();
    
}
?>