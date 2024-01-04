<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div id = "profile" name = "profile" align = "center">
        <?php
        session_start();

        $home = "";

        if($_SESSION['user_type']==='admin') $home = "adminDashboard.php";
        else $home = "userDashboard.php";

        $content = "<table border = '1px'>
        <tr><td colspan='2' style='text-align:center;'>Profile</td></tr>
        <tr><td>ID</td><td>".$_SESSION['given_id']."</td></tr>
        <tr><td>NAME</td><td>".$_SESSION['user_name']."</td></tr>
        <tr><td>EMAIL</td><td>".$_SESSION['email']."</td></tr>
        <tr><td>USER TYPE</td><td>".$_SESSION['user_type']."</td></tr>
        <tr><td colspan = '2' style='text-align:right;'><a href = ".$home.">Go Home</a></td></tr>
        </table>";
        echo $content;
        ?>
    </div>
</body>
</html>