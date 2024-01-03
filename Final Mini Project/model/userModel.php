<?php
require_once("dp.php");
function insertUser($name, $password, $email, $user_type){
    $conn = getConnection();

    $sql = "INSERT INTO users (USER_NAME, PASSWORD, EMAIL, USER_TYPE) values (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $password, $email, $user_type);
    if($stmt->execute()){
        $stmt->close();
        $conn->close();
        return true;
    }
    else{
        $stmt->close();
        $conn->close();
        return false;
    }
}

function getUserByUsername($username) {
    $conn = getConnection();
    $query = "SELECT * FROM users WHERE USER_NAME = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function updatePassword($id, $pass){
    $conn = getConnection();
    $sql = "UPDATE users SET PASSWORD = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $pass, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


function getUsers(){

    $conn = getConnection();
    $data = array();
    if($conn){
        $query = "SELECT * FROM users";
        $stmt = $conn->prepare($query);
        if($stmt){
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $data[] = $row;
                    }
                }
            }
            
        }
    }
    
    return $data;
}
?>