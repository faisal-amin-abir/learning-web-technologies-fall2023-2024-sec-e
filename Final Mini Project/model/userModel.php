<?php
require_once("dp.php");
function insertUser($given_id, $name, $password, $email, $user_type){
    $conn = getConnection();

    $sql = "INSERT INTO users (GIVEN_ID, USER_NAME, PASSWORD, EMAIL, USER_TYPE) values (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss",$given_id, $name, $password, $email, $user_type);
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

function getUserByUserID($id){
    $conn = getConnection();
    $query = "SELECT * FROM users WHERE GIVEN_ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
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



function isIdAvailable($id){

    $conn = getConnection();

    $sql = "SELECT * FROM users where GIVEN_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0) return false;
    }

    return true;
}



function isPassAvailable($password){

    $conn = getConnection();

    $sql = "SELECT * FROM users where PASSWORD = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $password);

    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0) return false;
    }

    return true;
}

function isNameAvailable($name){
    $conn = getConnection();

    $sql = "SELECT * FROM users where USER_NAME = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);

    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0) return false;
    }

    return true;
}

function isMailAvailable($email){
    $conn = getConnection();

    $sql = "SELECT * FROM users where EMAIL = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows > 0) return false;
    }

    return true;
}



?>