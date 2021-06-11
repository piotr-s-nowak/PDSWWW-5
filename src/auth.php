<?php
//source: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/
session_start();
if(!isset($_SESSION["email"])){
    header("Location: ../Login_window/login.html");
    exit();
    }
else{
}
?>
