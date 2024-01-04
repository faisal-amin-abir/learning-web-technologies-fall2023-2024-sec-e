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
            User ID <br>
            <input type="text" id = "id" name = "id"> <br>
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