<?php

session_start();
include("config.php");


$userid = mysqli_real_escape_string($conn, $_POST['userid'] );
$pwd = mysqli_real_escape_string($conn, $_POST['password'] );



$query = "SELECT *FROM studentaccessdatabase WHERE StudentID = '$userid' && Password ='$pwd' ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $total;

$queryTeacher = "SELECT *FROM adminaccess WHERE teacherID = '$userid' && Password ='$pwd' ";
$dataTeacher = mysqli_query($conn,$queryTeacher);
$totalTeacher = mysqli_num_rows($dataTeacher);
echo $totalTeacher;

if($total == 1)                                        
{   
    $_SESSION['userName'] = $userid;
    header('location:index');
}
else
{
    if($totalTeacher == 1)                                        
    {   
    $_SESSION['userName'] = $userid;
    header('location:adminPanel');
    }
    else
    {  
      
        header('location:log');
    }
}



$conn ->close();

?>