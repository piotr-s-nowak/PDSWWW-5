<?php

//source: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/

$con = mysqli_connect("localhost","root","","www");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
