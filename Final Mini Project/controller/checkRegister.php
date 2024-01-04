<?php
require_once("checkValidation.php");
require_once("../model/userModel.php");


$given_id = $_REQUEST["userId"];
$name = $_REQUEST["regName"];
$pass = $_REQUEST["regPass"];
$rePass = $_REQUEST["confPass"];
$email = $_REQUEST["regMail"];
$userType = $_REQUEST["regUserType"];

//name check
if(isNameValid($name)){
    if(isNameAvailable($name)){

        //pass check
        if(isPassValid($pass)){
            if(isPassAvailable($pass)){

                // rePass check
                if($rePass == $pass){

                    // email check
                    if(isMailValid($email)){
                        if(isMailAvailable($email)){
                            
                            // id check
                            if(isIdValid($given_id)){
                                if(isIdAvailable($given_id)){
                                    // all condition checked
                                    // enter data in database
                                    if(insertUser($given_id, $name, $pass, $email, $userType)){
                                        echo "Successfully inserted";
                                        header("location: ../view/login.php");
                                    }
                                    echo "Can not insert User";

                                }
                                else echo "Id already exists";
                            }
                            else echo "Enter a valid id";
                        }
                        else echo "This mail is already used";
                    }
                    else echo "Enter a valid mail";

                }
                else echo "Password not do not match";

            }
            else echo "Password matches with other users";
        }
        else echo "Enter a valid password";

    }
    else echo "User Name already exists";
}
else echo "Enter a valid name";


?>