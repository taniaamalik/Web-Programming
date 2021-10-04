<?php
include_once 'check_guest.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="login_process.php" method="post">
            <label>
                Username :
                <input type="text" name="username" required autofocus>
            </label>
            <br>
            <label> 
                Password : 
                <input type="password" name="password" required>
            </label>
            <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>