<?php

    include "config.php";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 

   
    $sql = "INSERT INTO messagesection(name,email,message) VALUES('$name','$email','$message')" ;
          


    if($conn->query($sql) === TRUE)
    {
     
        header("Location:contact.php");
    
    }
    else
    {
        header("Location:contact.php");
    }

    $conn->close();

?>

