<?php
session_start();

require_once("../model/userModel.php");

$id = $_REQUEST["id"];
$password = $_REQUEST["password"];

$user = getUserByUserID($id);

if ($user) {
    if ($password == $user["password"]) {
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['user_type'] = $user['user_type'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['given_id'] = $user['given_id'];

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
