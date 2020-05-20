

<?php



include "config.php";


    $rowID =  $_POST['rowID'];
    $Password =  $_POST['Password'];
 


   
    $query = "UPDATE adminaccess SET Password='$Password'  WHERE rowID = '$rowID' ";

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

