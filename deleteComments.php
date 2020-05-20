<?php

    include "config.php";

    //delete data from sql
    $sql = "DELETE FROM commentsection WHERE commentID = '$_GET[commentID]' " ;


    if($conn->query($sql))
    {
        echo "Query Executed";
        header("Location:adminPanel.php");
        die();
    }
    else
    {
        echo "Error Deleting Data";
        header("Location:adminPanel.php");
        die();
    }

    $conn->close();

?>