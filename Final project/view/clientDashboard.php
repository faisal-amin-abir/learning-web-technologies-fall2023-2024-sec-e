<?php
    session_start();
    require_once("../controller/authCheck.php");
    checkLoggedIn();
    checkUserType("client","login.php");
?>
<html>
<head>
    <title>Client Dashboard</title>
    <link rel="stylesheet" href="../asset/css/index.css">
</head>
<body>
<nav align="right">
    <a href="clientDashboard.php">Home</a>|
    <a href="profile.php">Profile</a>|
    <a href="message.php">Message</a>|
    <a href="settings.php">Settings</a>|
    <a href="../controller/logoutCheck.php">Logout</a>
    <br><br>
    <form action="../controller/searchFreelancer.php" method="GET">
        <label for="search"><strong>Search Freelancers:</strong></label>
        <input type="text" id="search" name="search" placeholder="Enter username or user ID">
        <input type="submit" value="Search">
    </form>
</nav>

<section>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <button onclick="redirectToJobPost()">JobPost</button>
    <script>function redirectToJobPost() {window.location.href = 'jobpost.php';}</script>
</section>
<section style="max-width: 500px;">
    <fieldset>
        <legend><h2>Posted Jobs</h2></legend>
        <div id="jobList"></div>
    </fieldset>
</section>
<script src="../asset/js/clientPostedJob.js"></script>
</body>
</html>
