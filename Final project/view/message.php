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
    <title>Message Page</title>
    <link rel="stylesheet" href="../asset/css/index.css">

    
</head>
<body>
<nav align="right">
        <a href="<?php
        if ($_SESSION['user_type'] === 'client') {
            echo 'clientDashboard.php';
        } elseif ($_SESSION['user_type'] === 'freelancer') {
            echo 'freelancerDashboard.php';
        } elseif ($_SESSION['user_type'] === 'admin') {
            echo 'adminDashboard.php';
        } else {
        }
        ?>">Home</a>|
            <a href="profile.php">Profile</a>|
            <a href="settings.php">Settings</a>|
            <a href="../controller/logoutCheck.php">Logout</a>
    </nav>

    
     <script src="../asset/js/ajaxForMsgView.js"></script>
    <input type="text" id = "sId" style="display:none" data-sid = <?php echo $_SESSION['user_id'];?>>
    <div id = 'msgView'></div>
</body>
</html>
