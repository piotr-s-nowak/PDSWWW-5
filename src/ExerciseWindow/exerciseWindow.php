<?php
//include auth.php file on all secure pages
    include("../auth.php");
    if(intval($_SESSION['isteacher'])===1){
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
    <h1><?php echo $row['name']  ?></h1>

</div>

<div id="exerciseHeader">

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
    <p><?php echo $row['description']  ?></p>
    <div id="requirements">
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
    <div id="hints">
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
</body>
<?php
    echo '<script>setDifficulty('.$row['difficulty'].')</script>'
?>
</html>
