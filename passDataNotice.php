<?php

    include "config.php";
    
    $Grade = $_POST['Grade'];
    $Notice = $_POST['Notice'];
  
 

   
    $sql = "INSERT INTO notice (Grade,Notice) VALUES('$Grade','$Notice')" ;
         


    if($conn->query($sql) === TRUE)
    {
     
        header("Location:adminPanel.php");
    
    }
    else
    {
        header("Location:adminPanel.php");
    }

    $conn->close();

?>

