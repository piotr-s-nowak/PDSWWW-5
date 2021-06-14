<?php
    include("../auth.php");
    include("../db.php");

?>

<!DOCTYPE html>
<html lang="en">
<link href="select_group_style.css" rel="stylesheet">
<link href="../Assets/codeTIcon.ico" rel="icon">
<head>
    <meta charset="UTF-8">
    <title>CodeT</title>
   <script src="listScripts.js" type="text/javascript"></script>

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
    <h1 class="groupsTitle" onclick =addElements(3)

        >
        Select group:
    </h1>
    <button id="Join"
            onClick=
           <?php if(  $_SESSION['isteacher'] ==1 ) {echo "location.href='../CreateGroup/createGroup.php'";}else{ echo  "location.href='../joinGroup/joinGroup.php'";}  ?>>
       <?php if(  $_SESSION['isteacher'] ==1 ) {echo 'Create new group';}else{ echo 'Join to group';}  ?>
    </button>
</div>


<div class="groupsMain">
    <ul id="listOfGroups">
        <li class="listElement"
        >
            <h3 class="GroupName">Nazwa grupy:</h3>
            <h3 class="Teacher">
                Prowadzący:
            </h3>

       </li>


   	 <?php
   	 $tutor = $_SESSION["email"];
   	 $query = "SELECT * FROM groups WHERE tutor='$tutor'";
   	 $results = mysqli_query($con,$query) or die(mysqli_error($con));
   	 $rows = array();
   	  while ($row = mysqli_fetch_array($results)) {
     	 $rows[] = $row;
    }
    echo '<script>';
   foreach ($rows as &$row) {
	        $name = $row['name'];
	        $tutor = $row['tutor'];
	        $group_id = $row['ID'];

        	echo 'addElement("'.$name.'","'.$tutor.'","'.$group_id.'");';
    }

    echo '</script>';
	?>

    </ul>

</div>
</body>

</html>


