<?php
include("../auth.php");
     if(intval($_SESSION['isteacher'])===0){
         echo "<script>history.go(-1)</script>";
        }
    require("../db.php");

    $exercise_id =  $_COOKIE["exerciseID"];
    $query = "SELECT * FROM `exercise` WHERE id='$exercise_id'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<link href="teacher_exercise_style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="../Assets/codeTIcon.ico" rel="icon">
<head>
    <meta charset="UTF-8">
    <title>CodeT</title>
</head>
<script src="teacherExerciseScripts.js" type="text/javascript"></script>

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

<div class="exerciseHeader">
    <button class="fa" onClick=goBack()>&#xf100;</button>
    <h1><?php echo $row['name']  ?></h1>
    <div id="deadlineInfo"><h3>Deadline</h3></div>
    <div id="deadline"><?php echo $row['deadline']  ?></div>
    <div id="difficultyInfo"><h3>Difficulty</h3></div>
    <div id="difficulty">
        <span class="inner-circle"></span>
        <span class="inner-circle"></span>
        <span class="inner-circle" id="circle3"></span>
        <span class="inner-circle" id="circle4"></span>
        <span class="inner-circle" id="circle5"></span>
    </div>
</div>


<div class="exerciseInfo">
    <button class="collapsible" onclick=openCollapsible() type="button">&#11167; <b>Exercise details:<b></b></button>
    <p class="show" id="content">
        <?php echo $row['description']  ?>
    </p>
    <div class="show" id="requirements">
        <h2>
            Requirements:
        </h2>
        <ul>
            <?php
                $all_requirements = $row['requirements'];
                $rows = explode("\n", $all_requirements);
                foreach ($rows as &$line){
                    echo '<li>'.$line.'</li>';
                }
            ?>
        </ul>
    </div>
    <div class="show" id="hints">
        <h3>
            Hints:
        </h3>
        <button id="showHintsButton" onclick="showHints()">
            click to show
        </button>

        <ul id="hintsList">
            <?php
                $all_hints = $row['hints'];
                $rows = explode("\n", $all_hints);
                foreach ($rows as &$line){
                    echo '<li>'.$line.'</li>';
                }
            ?>
        </ul>
    </div>
</div>
<div class="studentList">
    <h1 onclick="addElements(15)">Students:</h1>
    <ul id="listOfStudents">
        <li class="listElement"
        >
            <h3 class="Name"></h3>
            <h4 class="NameDesc"> Name</h4>
            <h3 class="uploadDate"></h3>
            <h4 class="DateDesc"> UploadDate:</h4>
            <h3 class="status"></h3>
            <h4 class="statusDesc"> UploadDate:</h4>
            <button class="download"></button>
            <h4 class="downloadDesc">:</h4>
            <form action="/action_page.php" class = "gradeForm">
                <label for="grade" class = gradeClass>set grade:</label>
                <input type="number" id = "grade" class ="grade" name="grade" min="1" max="5" required>
                <input type="submit" class ="submitGrade">
            </form>
        </li>
    </ul>

</div>
</body>
<?php
    echo '<script>setDifficulty('.$row['difficulty'].')</script>'
?>
</html>
