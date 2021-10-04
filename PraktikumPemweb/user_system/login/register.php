<?php
include_once 'check_guest.php';
?>

<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="register_process.php" method="post">
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
            <label>
                Name :
                <input type="text" name="name" required>
            </label>
            <br>
            <input type="submit" value="Register">
        </form>
    </body>
</html>