<?php

include_once 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $mysqli->query($sql);

//Jika username ada
if ($result->num_rows) {
    $row = $result->fetch_object();

    //Jika Password Cocok
    if (password_verify($password, $pass)) {
        session_start();

        $_SESSION['user_system_logged_in'] = true;
        $_SESSION['user_system_name'] = $row->name;

        header('Location: index.php');
    } else {
        echo 'Wrong Password';
    }
} else {
    echo 'username not exists';
}

$result->close();
$mysqli->close();
