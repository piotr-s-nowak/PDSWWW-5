<?php

try{
    $con = new PDO("mysql:host=localhost;dbname=www","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    echo "error".$e->getMessage();
}
    session_start();
if (isset($_POST['exerciseName'])){
    $name = $_POST['exerciseName'];
    $requirements = $_POST['requirements'];
    $description = $_POST['details'];
    $hints =  $_POST['hints'];
    $difficulty =  $_POST['difficulty'];
//     $deadline = date('Y-M-D',strtotime($_POST['deadline']));
    $deadline = $_POST['deadline'];
    $teacher_id =  $_SESSION['id'];
    $group_id =  $_SESSION['group_id'];
    $insert = $con->prepare("insert into exercise (teacher_id,name,description,requirements,hints,deadline,difficulty,group_id) values (:teacher_id,:name,:description,:requirements,:hints,:deadline,:difficulty,:group_id)");
    $insert->bindParam(':teacher_id',$teacher_id);
    $insert->bindParam(':name',$name);
    $insert->bindParam(':description',$description);
    $insert->bindParam(':requirements',$requirements);
    $insert->bindParam(':hints',$hints);
        $insert->bindParam(':deadline',$deadline);
    $insert->bindParam(':difficulty',$difficulty);
    $insert->bindParam(':group_id',$group_id);
    $insert->execute();
    header("Location: ../SelectExerciseWindow/selectExerciseWindow.php");

    }
else{
echo 'test;';
}
?>
