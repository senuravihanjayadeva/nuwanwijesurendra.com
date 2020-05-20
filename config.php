<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'educationwebsitedatabase';

  //Create Connection
  $conn = new mysqli ($servername,$username,$password,$database);

  //Check Connection
  if($conn->connect_error)
  {
      echo "MySQL Connection Error";
  }


 ?> 
