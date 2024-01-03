<?php
function checkLoggedIn() {
    if (!isset($_SESSION['user_name'])) {
        header("location: ../view/login.php");
        exit();
    }
}
function checkUserType($allowedUserType, $redirectPage) {
    if ($_SESSION['user_type'] !== $allowedUserType) {
        header("location: ../view/$redirectPage");
        exit();
    }
}
?>
