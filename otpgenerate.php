<?php

session_start();

include("config.php");


$email = mysqli_real_escape_string($conn, $_POST['email'] );


$queryTeacher = "SELECT *FROM adminaccess WHERE email = '$email' ";
$dataTeacher = mysqli_query($conn,$queryTeacher);
$totalTeacher = mysqli_num_rows($dataTeacher);
echo $totalTeacher;

if($totalTeacher == 1)                                        
{   
    $otp = rand(10,10000);

    //Prepared Statement
    $sql = "INSERT INTO otp(email,otpCode) VALUES(?, ?)" ;
          
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare( $stmt, $sql))
    {

        echo "SQL error";

    }
    else
    {
        mysqli_stmt_bind_param( $stmt, "ss", $email, $otp);
        mysqli_stmt_execute($stmt);
    }

    $_SESSION['email'] = $email;
    $_SESSION['otp'] = $otp;
    header('location:send_mail.php');
}
else
{  
  
    echo 'Error';
    $_SESSION['errorOTP'] = 'Incorrect Email';
    header('location:forgotpassword');
}

?>