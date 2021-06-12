<?php
    include("../auth.php");
    if(intval($_SESSION['isteacher'])===0){
         echo "<script>history.go(-1)</script>";
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CodeT</title>
    <link href="../Assets/codeTIcon.ico" rel="icon">
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    <link href="style_create_exercise.css" rel="stylesheet" type="text/css">
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
<div class="imgcontainer">
    <img class="header_logo" height="80px" src="../Assets/logoBlack.png" width="auto">
</div>
<div class="container">
    <form action="/action_page.php">
        <div>

            <label class="labelText">Podaj dane aby utworzyć zadanie.</label>

            <input name="gname" placeholder="Tytuł zadania" required type="text">

            <textarea cols="50" name="details" placeholder="Szczegóły zadania" required rows="8"></textarea>
            <textarea cols="50" name="details" placeholder="Wymagania dotyczące zadania oddzielone enterem" required
                      rows="4"></textarea>
            <textarea cols="50" name="details" placeholder="(Opcjonalne) wskazówki oddzielone enterem"
                      rows="4"></textarea>


            <label class="control-label" for="optiontext">Select difficulty level</label><br> <br>
            <div class="checkboxes">
                <input name="difficulty" required type="radio" value="1"/> 1
                <input name="difficulty" required type="radio" value="2"/> 2
                <input name="difficulty" required type="radio" value="3"/> 3
                <input name="difficulty" required type="radio" value="4"/> 4
                <input name="difficulty" required type="radio" value="5"/> 5
            </div>
            <br>
            <br>

            <label class="control-label" for="deadlineInput">Select deadline</label><br> <br>
            <input id="deadlineInput" name="deadline" placeholder="Deadline" required type="date">

            <div class="clearfix">
                <button class="signupbtn" type="submit">Utwóż zadanie</button>
            </div>
            <div class="clearfix">
                <button class="cancelbtn" type="button">Anuluj</button>
            </div>
        </div>
    </form>
</div>


</body>
</html>
