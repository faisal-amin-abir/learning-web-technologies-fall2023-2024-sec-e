<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginPage</title>
</head>
<body>
    <div align = "center">
    <fieldset style="width: 10%; text-align:left;" >
        <legend>LOGIN</legend>
        <form action="../controller/checkLogin.php" id = "loginForm">
            User Name <br>
            <input type="text" id = "user_name" name = "user_name"> <br>
            Password <br>
            <input type="password" id = "password" name = "password"> <br>
            <input type="checkbox" id = "loginCheck" value = "memorize"> Remember Me 
            <hr>
            <button id = "submit">Login</button>
            <a href="register.php">Register</a>
        </form>
    </fieldset>
    </div>
</body>
</html>