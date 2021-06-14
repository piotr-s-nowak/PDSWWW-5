<?php
//source: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/
require('../db.php');
session_start();
// If form submitted, insert values into the database.
    $group_id = $_SESSION['group_id'];
    $query = "SELECT * FROM `exercise` WHERE group_id='$group_id'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
?>
