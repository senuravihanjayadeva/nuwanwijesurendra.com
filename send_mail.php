<?php
  session_start();
    $mailto = $_SESSION['email'];
    $mailMsg = $_SESSION['otp'];

    unset($_SESSION['email']);
    unset($_SESSION['otp']);

   //$mailto = $_POST['mail_to'];
   $mailSub = 'OTP Verification Code';
   //$mailMsg = $_POST['mail_msg'];

   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();//in panel comment this
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "nuwanwijesurendradrive001@gmail.com";
   $mail ->Password = "Nuwan@2020drive001";
   $mail ->SetFrom("nuwanwijesurendradrive001@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
       header('location:verifyaccount.php');
   }





   

