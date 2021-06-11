<?php
session_start();
// Destroying All Sessions
unset($_SESSION['email']);

if(session_destroy())
{
// Redirecting To Home Page
   header("Location: Login_window/login.html");
}


?>
