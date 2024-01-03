
<?php
session_start();
require_once("../controller/authCheck.php");
checkLoggedIn();
checkUserType('admin', 'login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <div align = "center">
        <fieldset style="width: 20%; text-align:center;" >
            <h1>Welcome Admin !</h1>
            <a href="profile.php">Profile</a> <br>
            <a href="changePass.php">Change Password</a> <br>
            <a href="viewUsers.php">View Users</a><br>
            <a href="../controller/logoutCheck.php">Logout</a>
        </fieldset>
    </div>
    
</body>
</html>