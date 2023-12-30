<?php
session_start();
require_once("../controller/AuthCheck.php");
checkLoggedIn();

require_once("../model/userModel.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$senderId = $_SESSION['user_id'];
$rId = $mydata['sid'];

$receiverId=0;

for($i = 0; $i<strlen($rId); $i++){
    $c = $rId[$i] - '0';
    $receiverId *= 10;
    $receiverId += $c;
}

if($receiverId == $senderId){
    echo "can not send message !!";
}
else{
    $text_msg = $mydata['text_msg'];
    $senderName = $_SESSION['username'];
    $receiverName = getUserById($receiverId);
    $res = insertMessage($senderId, $senderName, $receiverId, $receiverName['username'], $text_msg);

    echo $res;

}

?>