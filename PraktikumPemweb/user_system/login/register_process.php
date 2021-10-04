<?php

include_once 'db.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$name = $_POST['name'];

//Skip Validasi

$sql = "INSERT INTO user (username, password, name) VALUES ('$username','$password', '$name')";

$mysqli->query($sql);
$mysqli->close();
header('Location: login.php');