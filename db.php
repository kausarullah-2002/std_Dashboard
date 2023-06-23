<?php 

// localhost database connection  
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "stddashboard";
// Try to connection database

$connection = new mysqli($serverName, $userName, $password, $dbName);

// connection the check variable your form
if($connection->connect_error){
    die("Connectoin Failed : ". $connection->connect_error);
    exit();
}


?>