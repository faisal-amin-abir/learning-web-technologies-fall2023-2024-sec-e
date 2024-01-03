<?php
session_start();
require_once("authCheck.php");
checkLoggedIn();
require_once("../model/userModel.php");
require_once("checkValidation.php");

$pass = $_REQUEST['currPass'];
$newPass = $_REQUEST['newPassword'];
$rNewPass = $_REQUEST['rNewPassword'];

$user = getUserByUsername($_SESSION['user_name']);

if($user['password'] === $pass){
    if(isPassValid($newPass)){
        if(isPassAvailable($newPass)){
            if($newPass == $rNewPass){
                //update password;
                updatePassword($_SESSION['id'], $newPass);
                echo "Password changed";
            }
            else echo "New Password do not match";
        }
        else echo "New Pass is already in use";
    }
    else echo "Enter a valid password";
}
else echo "Current Password do not match";



?>

