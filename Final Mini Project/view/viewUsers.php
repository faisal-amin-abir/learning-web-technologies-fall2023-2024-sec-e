<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>
    <div align = "center">
        <?php
            session_start();
            
            require_once("../controller/authCheck.php");
            require_once("../controller/getUsers.php");
            checkLoggedIn();
            $users = getAllUsers();
            $content = "<table border = '1'>";
            $content .= "<tr><td colspan= '4' style = 'text-align:center;'>Users</td></tr>";
            $content .= "<tr><td>ID</td><td>Name</td><td>Email</td><td>User Type</td></tr>";
            for($i = 0; $i< count($users); $i++){
                $content .= "<tr><td>".$users[$i]['given_id']."</td>";
                $content .= "<td>".$users[$i]['user_name']."</td>";
                $content .= "<td>".$users[$i]['email']."</td>";
                $content .= "<td>".$users[$i]['user_type']."</td></tr>";

            }
            $content .= "<tr><td colspan= '4' style = 'text-align:right;'><a href = 'adminDashboard.php'>Go Home</a></td></tr>";
            $content .= "</table>";
            echo $content;
        ?>
    </div>
</body>
</html>