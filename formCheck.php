<?php 
include "db.php";
global $connection;
// send request to connect database 
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sdtname = $_POST["fullname"];
        $fathername = $_POST["fathername"];
        $sdtemail = $_POST["stdemail"];
        $sdtcontact = $_POST["contact"];
        $sdtcnic = $_POST["stdCNIC"];
        $CNICnumber = $_POST["fCNIC"];
        $sdtage = $_POST["age"];
        $sdtgender = $_POST["gender"];
        $sdtaddress = $_POST["address"];
        $sdtcity = $_POST["city"]; 
        
        $educationInformation = $_POST["educationInformation"];

// checking your variable from database table
$query = "SELECT CNICNumber FROM student WHERE CNICNumber = '" . $sdtcnic ."' ";
$result = mysqli_query($connection , $query);
$count = mysqli_num_rows($result);
$result -> free();
// check user cnic 
if($count >  1){
    header("Location: alert.html");
    exit();
} 
else{
        $insertvalue =" INSERT INTO student (`fullName`,`fatherName`,`email`,`contact`,`CNICNumber`,`fatherCNIC`,`age`,`gender`,`city`,`address`,`educationInfo`) VALUE ('".$sdtname."', '".$fathername."', '".$sdtemail."', '".$sdtcontact."', '".$sdtcnic."', '".$CNICnumber."', '".$sdtage."', '".$sdtgender."', '".$sdtaddress."', '".$sdtcity."' , '".$educationInformation."')";
        $insertquery = mysqli_query($connection , $insertvalue);

        if($insertquery){
                header("Location: profile2.php");
                exit();
        }
}
exit();
}
?>