<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterPage</title>
</head>
<body>
    <div align = "center">
        <fieldset style="width: 12%; text-align:left;">
            <legend>REGISTRATION</legend>
            <form action="../controller/checkRegister.php" id = "regForm" method = "post">
                ID <br>
                <input type="text" id = "userId" name = "userId"> <br>
                Password <br>
                <input type="password" id = "regPass" name = "regPass"> <br>
                Confirm Password <br>
                <input type="password" id = "confPass" name = "confPass" > <br>
                Name <br>
                <input type="text" id = "regName" name = "regName"> <br>
                Email <br>
                <input type="email" id = "regMail" name = "regMail"> <br>
                User Type <i>[User/Admin]</i> <br>
                <select id = "regUserType" name = "regUserType">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <hr>
                <button id = "register">Register</button>
                <a href="login.php">LOGIN</a>
            </form>
        </fieldset>
    </div>
</body>
</html>