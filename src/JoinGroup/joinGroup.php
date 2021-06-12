<?php
//include auth.php file on all secure pages
include("../auth.php");
    if(intval($_SESSION['isteacher'])===1){
         echo "<script>history.go(-1)</script>";
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="join_group_style.css" rel="stylesheet" type="text/css">
    <link href="../Assets/codeTIcon.ico" rel="icon">
    <title>CodeT</title>
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
    <form  action="/action_page.php" method="post">

        <div >
            <label for="psw" >
                <b>Podaj token i uzyskaj dostęp do grupy.</b><br><br><br>
                <b>Informacje o grupie:</b><br><br>
                <b>Nazwa: Programowanie obiektowe 1</b><br><br>
                <b>Prowadzący: dr inż. Jan Kowalski</b><br><br>
            </label>
            <input type="password" placeholder="Token" name="psw" id="psw" required>

            <button type="submit">Dołącz</button>
        </div>

        <div>
            <button type="button" class="cancelbtn" onclick=goBack()>Anuluj</button>
        </div>
    </form>
</div>


</body>
</html>
