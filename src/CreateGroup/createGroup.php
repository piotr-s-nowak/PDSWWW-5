<?php
//include auth.php file on all secure pages
include("../auth.php");
    if(intval($_SESSION['isteacher'])===0){
         echo "<script>history.go(-1)</script>";
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>CodeT</title>
    <link rel="icon" href="../Assets/codeTIcon.ico">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="style_creategroup.css" rel="stylesheet" type="text/css">
    <link href="create_group.php" rel="script"
</head>
<script>
function goBack() {
  window.history.back();
}
</script>
<body>
<header>
    <div class="header">
        <div class="leftBox">
            <img class="header_logo" src="../Assets/logoBlack.png" height="30px" width="auto">
        </div>

        <div class="rightBox">
            <table align="center" >
                <tr >
                    <th><i>Hello, <?php echo $_SESSION["name"]," ",$_SESSION["surname"];?> &nbsp&nbsp</th>
                                      <th><a class="header_text" href="../logout.php"> Log out </a></th>
                    <th><img class="header_logo" src="../Assets/user.png" height="50px" width="auto"></th>
                    <th> <div class="arrow-down"></div></th>
                </tr>
            </table>

        </div>
    </div>
</header>
<div class="imgcontainer">
    <img class="header_logo" src="../Assets/logoBlack.png" height="80px" width="auto">
</div>
<div class="container">
    <form action="create_group.php" method="post" >
        <div >

            <label class="labelText">Podaj dane aby utworzyć grupę.</label>

            <input type="text" placeholder="Nazwa Grupy" name="gname" required>

            <input type="text" placeholder="Maksymalna liczba członków" name="users_no" required>

            <input type="text" placeholder="Prowadzący" name="tutor" required>

            <input type="text" placeholder="Podaj token" name="token" required>

            <input type="text" placeholder="Powtórz token" name="token-repeat" required>
            <legend class="labelText">Podaj akceptowane języki.</legend><br>
            <input type="checkbox" id="lang1" name="lang1" value="All">
            <label for="lang1"> Wszystkie</label><br>
            <input type="checkbox" id="lang2" name="lang2" value="Java">
            <label for="lang2"> Java</label><br>
            <input type="checkbox" id="lang3" name="lang3" value="C++">
            <label for="lang3"> C++</label><br>
            <input type="checkbox" id="lang4" name="lang4" value="Python">
            <label for="lang4"> Python</label><br>
            <input type="checkbox" id="lang5" name="lang5" value="JavaScript">
            <label for="lang5"> JavaScript</label><br>
            <input type="checkbox" id="lang6" name="lang6" value="C#">
            <label for="lang6"> C#</label><br><br>
            <div class="clearfix">
                <button type="submit" name ="submit" class="signupbtn">Utwóż grupę</button>
            </div>
            <div class="clearfix">
                <button type="button" class="cancelbtn" onclick = goBack()>Anuluj</button>
            </div>
        </div>
    </form>
</div>


</body>
</html>
