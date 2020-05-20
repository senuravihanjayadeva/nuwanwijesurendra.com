<?php
    
    include "config.php";
    

    //user mysqli injection
    $LessonID = mysqli_real_escape_string($conn, $_POST['LessonID'] );
    $Topic = mysqli_real_escape_string($conn, $_POST['Topic'] );
    $Name = mysqli_real_escape_string($conn, $_POST['Name'] );
    $Comment = mysqli_real_escape_string($conn, $_POST['Comment'] );
   

  
    //Prepared Statement
    $sql = "INSERT INTO commentsection(LessonID,LessonTopic,StudentName,comment) VALUES(?, ?, ?, ?)" ;
          
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare( $stmt, $sql))
    {

        echo "SQL error";

    }
    else
    {
        mysqli_stmt_bind_param( $stmt, "isss", $LessonID, $Topic, $Name, $Comment);
        mysqli_stmt_execute($stmt);
    }

    
    header("Location:Lesson?Tid=$LessonID");

    $conn->close();

?>

