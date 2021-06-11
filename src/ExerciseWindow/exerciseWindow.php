<?php
//include auth.php file on all secure pages
include("../auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<link href="exercise_style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../Assets/codeTIcon.ico" rel="icon">
<head>
    <meta charset="UTF-8">
    <title>CodeT</title>
</head>
<script src="exerciseScripts.js" type="text/javascript"></script>

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

<div class="exerciseTitle">
    <button onClick = goBack() class="fa">&#xf100;</button>
    <h1>ExerciseName</h1>

</div>

<div id="exerciseHeader">

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
    <div id="statusInfo"><h3>Status</h3></div>
    <div id="status">
        Waiting for upload
        <img alt="status icon" id="statusImg" src="../Assets/upload.png">
    </div>

    <div id="selectFilesInfo"><h3> Upload your files</h3></div>


    <div id="selectFiles">
        <div>
            <!--            <button onClick=goBack()>Select files from disk</button>-->
            <label class="custom-file-upload" for="file-upload" id="selectLabel">
                Select files from disk
                <input id="file-upload" multiple name="myfiles" onchange="showname()" required type="file">
            </label>
        </div>
    </div>

    <div id="send">
        <button onClick="sendFile()" type="submit">Send</button>

    </div>
    <div class="decorateLine1"></div>

</div>

<div class="exerciseInfo">
    <h1>
        Exercise details:
    </h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
        Integer nec odio. Praesent libero.<br>
        Sed cursus ante dapibus diam. Sed nisi.<br>
        Nulla quis sem at nibh elementum imperdiet.<br>
        Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.<br>
        Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
        inceptos himenaeos.<br>
        Curabitur sodales ligula in libero.
    </p>
    <div id="requirements">
        <h2>
            Requirements:
        </h2>
        <ul>
            <li>Use .... function</li>
            <li>Implement doubly linked list</li>
            <li>Program must compile!</li>
        </ul>
    </div>
    <div id="hints">
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
</body>
</html>
