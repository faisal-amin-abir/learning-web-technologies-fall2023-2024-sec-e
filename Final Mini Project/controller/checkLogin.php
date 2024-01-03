<?php
session_start();

require_once("../model/userModel.php");

$username = $_REQUEST["user_name"];
$password = $_REQUEST["password"];

$user = getUserByUsername($username);

if ($user) {
    if ($password == $user["password"]) {
        $_SESSION['user_name'] = $username;
        $_SESSION['user_type'] = $user['user_type'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        if ($user['user_type'] == 'admin') {
            header("location: ../view/adminDashboard.php");
        } elseif ($user['user_type'] == 'user') {
            header("location: ../view/userDashboard.php");
        }
        exit();
    } else {
        $errorMessage = "Invalid password";
    }
} else {
    $errorMessage = "Invalid username";
}

header("location: ../view/login.php?error=" . urlencode($errorMessage));
exit();
?>
