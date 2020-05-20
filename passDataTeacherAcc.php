<?php

    include "config.php";
    
    $email = $_POST['Email'];
    $teacherID = $_POST['teacherID'];
    $Password = $_POST['teacherPassword'];
   
   
    

     $sql ="INSERT INTO adminaccess(email,teacherID,Password) VALUES('$email','$teacherID','$Password')" ;


    if($conn->query($sql) === TRUE)
    {
     
        header("Location:adminPanel.php");
    
    }
    else
    {
        echo "Error Inserting Data";
        header("Location:adminPanel.php");
    }

    $conn->close();

?>

