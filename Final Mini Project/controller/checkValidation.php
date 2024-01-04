<?php

/*
function list --

1. check a valid pass - isPassValid()
2  check a valid name - isNameValid()
3  check a valid email - isMailValid()
4. check a valid id - isIdValid()


*/

function isIdValid($id){
    // XX-XXXXX-X
    $n = strlen($id);

    if($n != 10) return false;

    for($i=0; $i<$n; $i++){
        if($i==0){
            if($id[$i] >='1' && $id[$i] <='9'){

            }
            else return false;
        }
        elseif($i==2 || $i == 8){
            if($id[$i] != '-') return false;
        }
        else{
            if($id[$i] < '0' || $id[$i] >'9') return false;
        }
    }
    return true;
}


function isPassValid($password){

    $n = strlen($password);
    if($n < 8) return false;
    $cap=0; $low=0; $digit=0; $specialChar=0;
    for($i=0; $i<$n; $i++){
        if($password[$i] >='A' and $password[$i] <='Z')$cap++;
        elseif($password[$i] >='a' and $password[$i] <='z')$low++; 
        elseif($password[$i] >='0' and $password[$i] <='9')$digit++; 
        else $specialChar++; 
    }

    if($cap > 0 && $low > 0 && $digit > 0 && $specialChar > 0) return true;

    return false;
}

function isNameValid($name){
    $n = strlen($name);
    if($n < 3) return false;
    return true;
}

function isMailValid($email){

    $n = strlen ($email);
    if ($email == ""){
        return false;
    }
    else {
        $ca=0;
        $lastA=0;
        $lastDot=0;
        for($i = 0; $i<$n; $i++){
            if($email[$i] === '@'){
                $ca=$ca+1;
                $lastA = $i;
            }
            if($email[$i]=='.') $lastDot = $i;          
        }
        if($ca != 1){
            return false;
        }
        else if($lastDot - $lastA <= 1){
            return false;
        }
        else if($lastA == 0 || $lastDot == 0){
            return false;
        }
        // a@f.com
        else if( $n < 7){
            return false;
        }
        else {
            if($email[$n-1] !='m' || $email[$n-2] != 'o' || $email[$n-3]  != 'c' || $email[$n-4]!='.'){
                return false;
            }
        }
    
    }
    return true;
}


?>