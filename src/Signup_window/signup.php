

<?php


try{
    $con = new PDO("mysql:host=localhost;dbname=www","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    echo "error".$e->getMessage();
}

if(isset($_POST['signup']))
{

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $isteacher = 0;
    if(!empty($_POST['isteacher'])){
    	$isteacher = 1;
    }
    $insert = $con->prepare("insert into user (name,surname,email,password,isteacher) values (:name,:surname,:email,:pass,:isteacher)");

    $insert->bindParam(':name',$name);
    $insert->bindParam(':surname',$surname);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':pass',$pass);
    $insert->bindParam(':isteacher',$isteacher);
    $insert->execute();
    header("Location: ../SelectGroupWindow/groupWindow.php");

}


?>


