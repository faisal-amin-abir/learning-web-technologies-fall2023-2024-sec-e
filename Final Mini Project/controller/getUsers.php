<?php
require_once("../model/userModel.php");
function getAllUsers(){
    $users = getUsers();
    return $users;
}

?>