<?php

/*
function list --

1. check a valid pass - isPassValid()
2  check a valid name - isNameValid()
3  check a valid email - isMailValid()
4. check a valid id - isIdValid()
5. check a pass if not used in the database - isPassAvailable()
6. check a name if not used in the database - isNameAvailable()
7. check a mail if not used in the database - isMailAvailable()
8. check a id if available - isIDAvailable()

*/

function isIdValid($id){
    return true;
}

function isIdAvailable($id){
    return true;
}


function isPassValid($password){
    $n = strlen($password);
    if($n < 8) return false;
    return true;
}

function isNameValid($name){
    return true;
}

function isMailValid($email){
    return true;
}

function isPassAvailable($password){
    return true;
}

function isNameAvailable($name){
    return true;
}

function isMailAvailable($email){
    return true;
}

?>