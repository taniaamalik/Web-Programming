<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && $password == 'admin'){ 
    $_SESSION['username']=$username;   
    $_SESSION['password']=$password; 
    header('Location:Lat3_6b.php');
}else{
    header('Location:Lat3_6a.php');
}