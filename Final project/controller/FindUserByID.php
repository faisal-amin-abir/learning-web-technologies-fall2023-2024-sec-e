<?php
require_once("../model/userModel.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id = $mydata['sid'];
$res = getUserById($id);
echo json_encode($res);


?>