<?php
    include("../auth.php");

?>

<!DOCTYPE html>
<html lang="en">
<link href="select_exercise_style.css" rel="stylesheet">
<link href="../Assets/codeTIcon.ico" rel="icon">
<head>
    <meta charset="UTF-8">
    <title>CodeT</title>
    <script src="exerciseScripts.js" type="text/javascript"></script>
</head>





<body>
<header>
    <div class="header">
        <div class="leftBox">
            <img class="header_logo" height="30px" src="../Assets/logoBlack.png" width="auto">
        </div>

        <div class="rightBox">
            <table align="center">
                <tr>
                    <th><i>Hello, <?php echo $_SESSION["name"]," ",$_SESSION["surname"];?> &nbsp&nbsp</th>
                    <th><a class="header_text" href="../logout.php"> Log out </a></th>
                    <th><img class="header_logo" height="50px" src="../Assets/user.png" width="auto"></th>
                    <th>
                        <div class="arrow-down"></div>
                    </th>
                </tr>
            </table>

        </div>
    </div>
</header>
<div class="TitleDiv">
    <h1 class="groupsTitle">
        Select exercise:
    </h1>
     <?php if(  $_SESSION['isteacher'] ==1 ) {
        $link = "window.location.href='../Create_Exercise_Window/createExerciseWindow.php'";
        echo '<button id="Join" onClick='.$link.' > Create new Exercise </button>';
     }?>

</div>


<div class="groupsMain">
    <ul id="listOfGroups">
        <li class="listElement"
        >
            <h3 class="GroupName">Nazwa Cwiczenia:</h3>
            <h3 class="Teacher">
                Prowadzący:
            </h3>

        </li>
    </ul>
</div>
</body>
<?php
require('../db.php');
    $group_id = $_SESSION['group_id']-1;
    $query = "SELECT * FROM `exercise` WHERE group_id='$group_id'";
	$results = mysqli_query($con,$query) or die(mysqli_error($con));
	$is_teacher = $_SESSION['isteacher'];

	$rows = array();
    while ($row = mysqli_fetch_array($results)) {
      $rows[] = $row;
    }
    echo '<script>';
	foreach ($rows as &$row) {
	        $name = $row['name'];
	        $deadline = $row['deadline'];
	        $exercise_id = $row['id'];
        	echo 'addElement("'.$name.'","'.$deadline.'",'.$exercise_id.','.$is_teacher.');';
    }
      echo '</script>';
?>
</html>

