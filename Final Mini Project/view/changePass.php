
<?php
session_start();
require_once("../controller/authCheck.php");
checkLoggedIn();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <div align = "center">
        <fieldset style="width: 12%; text-align:left;" >
            <legend>CHANGE PASSWORD</legend>
            <form action="../controller/changePass.php" method = "post">
                Current Password <br>
                <input type="password" id = "currPass" name = "currPass"> <br>
                New Password <br>
                <input type="password" id = "newPassword" name = "newPassword"> <br>
                Retype New Password <br>
                <input type="password" id = "rNewPassword" name = "rNewPassword">  <hr>
                <button id = "btn-chng" name = "btn-chng">Change</button>
                <a href="<?php if($_SESSION['user_type']==='admin') echo 'adminDashboard.php'; else echo 'userDashboard.php';?>">Home</a>
            </form>
            
        </fieldset>
    </div>
</body>
</html>