<?php
include("../auth.php");
     if(intval($_SESSION['isteacher'])===0){
         echo "<script>history.go(-1)</script>";
        }
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
    <h1>ExerciseName</h1>
    <div id="deadlineInfo"><h3>Deadline</h3></div>
    <div id="deadline">10-10-2021</div>
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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
        Integer nec odio. Praesent libero.<br>
        Sed cursus ante dapibus diam. Sed nisi.<br>
        Nulla quis sem at nibh elementum imperdiet.<br>
        Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.<br>
        Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
        inceptos himenaeos.<br>
        Curabitur sodales ligula in libero.
    </p>
    <div class="show" id="requirements">
        <h2>
            Requirements:
        </h2>
        <ul>
            <li>Use .... function</li>
            <li>Implement doubly linked list</li>
            <li>Program must compile!</li>
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
            <li>use gson library</li>
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
</html>
