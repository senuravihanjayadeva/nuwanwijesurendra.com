<?php

session_start();
include("config.php");


$email = mysqli_real_escape_string($conn, $_POST['email'] );
$otpCode = mysqli_real_escape_string($conn, $_POST['otpCode'] );


$query = "SELECT *FROM otp WHERE email = '$email' && otpCode ='$otpCode' ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $total;


    if($total == 1)                                        
    {
        $queryAdmin = "SELECT *FROM adminaccess WHERE email = '$email' ";
		$dataAdmin = mysqli_query($conn,$queryAdmin);
		$result = mysqli_fetch_assoc($dataAdmin);
		$teacherID = $result['teacherID'];

        

        //delete otp data from sql
        $sql = "DELETE FROM otp WHERE email = '$email' AND otpCode = '$otpCode'  " ;


        if($conn->query($sql))
        {
            echo "Query Executed";
            $_SESSION['userName'] = $teacherID;
            header('location:adminPanel');
            die();
        }
        else
        {
            echo "Error Deleting Data";
            die();
        }

        
    }
    else
    {  
        $_SESSION['errorVerify'] = 'errorVerify';
        header('location:verifyaccount');
    }




$conn ->close();

?>