<?php
//source: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/

require('../db.php');
session_start();
// If form submitted, insert values into the database.

if (isset($_POST['email'])){

     $email = $_POST['email'];
     $pass = $_POST['password'];

	//Checking is user existing in the database or not
    $query = "SELECT * FROM `user` WHERE email='$email' and password = '$pass'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
    if($rows>=1){
        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['email'] = $email;
        $_SESSION['id'] =  $row['id'];
        $_SESSION['isteacher'] =  $row['isteacher'];
        // Redirect user to index.php
        echo
        header("Location: ../SelectGroupWindow/groupWindow.php");
    }
    else{
        $message = "Username/password is incorrect.";
            echo '<script>
                 window.location.href="login.html";

                 alert("Username/password is incorrect.");
              </script>';

	}
}

?>
