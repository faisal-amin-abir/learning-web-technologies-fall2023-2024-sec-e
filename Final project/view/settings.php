<?php
    session_start();
    require_once("../controller/authCheck.php");
    checkLoggedIn();
?>
<html>
<head>
    <title>User Settings</title>
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="stylesheet" href="../asset/css/navbar.css">
    <link rel="stylesheet" href="../asset/css/settings.css">
    <script src="../js/settingsValidation.js"></script>
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
        <a href="message.php">Message</a>| 
        <a href="settings.php">Settings</a>|
        <a href="../controller/logoutCheck.php">Logout</a>
    </nav>

    <section>
        <h2>User Settings</h2>

        <?php
            require_once("../controller/errorShowing.php");
        ?>

        <h3>Change Password</h3>
        <form action="../controller/settingsController.php" method="post" onsubmit="return validatePassword();">
            <label for="currentPassword">Current Password:</label>
            <input type="password" id="currentPassword" name="currentPassword" required><br>
            <label for="newPassword">New Password: </label>
            <input type="password" id="newPassword" name="newPassword" required><br>
            <input type="submit" name="changePassword" value="Change Password">
        </form>

        <h3>Change Email</h3>
        <form action="../controller/settingsController.php" method="post">
            <label for="newEmail">New Email:</label>
            <input type="email" id="newEmail" name="newEmail" required><br>
            <input type="submit" name="changeEmail" value="Change Email">
        </form>
    </section>

</body>
</html>
