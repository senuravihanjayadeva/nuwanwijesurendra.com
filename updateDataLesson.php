

<?php



 include "config.php";

 
     $LessonID =  $_POST['LessonID'];
     $Topic =  $_POST['Topic'];
     $Description  = $_POST['Description'];
     $Grade =  $_POST['Grade'];
     $URL = $_POST['URL'];



    
     $query = "UPDATE videolessons SET Topic='$Topic',Description='$Description',Grade='$Grade',URL='$URL'  WHERE lessonID = '$LessonID' ";

     $data=mysqli_query($conn, $query);

     if($data)
     {
         echo "Record Updated Successfully";
         header("Location:adminPanel.php");
         die();
     }
     else
     {
         header("Location:adminPanel.php");
         echo "Recort not updated";
     }



    
 

 $conn->close();

?>

