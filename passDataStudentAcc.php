<?php

    include "config.php";
    
    $studentID = $_POST['studentID'];
    $studentPassword = $_POST['studentPassword'];
   
   
    

     $sql ="INSERT INTO studentaccessdatabase(StudentID,Password) VALUES('$studentID','$studentPassword')" ;


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

