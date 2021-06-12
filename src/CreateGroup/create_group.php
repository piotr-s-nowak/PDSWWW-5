

<?php


try{
    $con = new PDO("mysql:host=localhost;dbname=www","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    echo "error".$e->getMessage();
}

if(isset($_POST['submit']))
{

    $name = $_POST['gname'];
    $users_no = $_POST['users_no'];
    $tutor = $_POST['tutor'];
    $token = $_POST['token'];
    $java = 0;
    $cpp = 0;
    $python = 0;
    $javascript = 0;
    $csharp = 0;

    if(!empty($_POST['lang2'])){
    	$java = 1;
    }
    if(!empty($_POST['lang3'])){
    	$cpp = 1;
    }
    if(!empty($_POST['lang4'])){
    	$python = 1;
    }
    if(!empty($_POST['lang5'])){
    	$javascript = 1;
    }
    if(!empty($_POST['lang6'])){
    	$csharp = 1;
    }
    if(!empty($_POST['lang1'])){
    	$java = 1;
        $cpp = 1;
        $python = 1;
        $javascript = 1;
        $csharp = 1;
    }


    $insert = $con->prepare("insert into groups (name,capacity,tutor,token,java,cpp,python,javascript,csharp) values (:name,:users_no,:tutor,:token,:java,:cpp,:python,:javascript,:csharp)");
    $insert->bindParam(':name',$name);
    $insert->bindParam(':users_no',$users_no);
    $insert->bindParam(':tutor',$tutor);
    $insert->bindParam(':token',$token);
    $insert->bindParam(':java',$java);
    $insert->bindParam(':cpp',$cpp);
    $insert->bindParam(':python',$python);
    $insert->bindParam(':javascript',$javascript);
    $insert->bindParam(':csharp',$csharp);
    $insert->execute();
    header("Location: ../SelectGroupWindow/groupWindow.php");

}


?>