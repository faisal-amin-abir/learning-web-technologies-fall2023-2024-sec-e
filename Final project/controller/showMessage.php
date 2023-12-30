<?php
session_start();
require_once("../model/userModel.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['sid'];
updateMessage($_SESSION['user_id']);
$res = getMessages($id);
echo json_encode($res);

?>