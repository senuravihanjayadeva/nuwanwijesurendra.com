<?php

    include "config.php";
    
    $Grade = $_POST['Grade'];
    $Topic = $_POST['Topic'];
    $Description = $_POST['Description']; 
    $URL = $_POST['URL'];

   
    

    $sql ="INSERT INTO videolessons(Grade,Topic,Description,URL) VALUES('$Grade','$Topic','$Description','$URL')" ;
     

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

