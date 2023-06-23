<?php
session_start();
$conn = mysqli_connect("localhost" , "root" , "stddashborad");
if (isset ($_POST['save_select'])) {

   $dbUpload = $_POST['dbUpload'];
    $campusName = $_POST['campusName'];
   
    $query = "INSERT INTO course (courseName, campusName) VALUE ('$coursename', '$campusname')";
   $query_run = mysqli_query($conn , $query);

                if(isset($_SESSION['status']))
                {
                    echo "<h4>" . $_SESSION['status'] ."</h4>";
                    unset( $_SESSION['status']);     
                }
                else
                {
                    $_SESSION['status']="Inserted successfully ! ";
                    header("Location: courses2.html");
                }
    }
?>