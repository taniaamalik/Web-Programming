<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'Iryana1512';
$dbname = 'user_system';
$mysqli = new mysqli($host, $dbusername,  $dbpassword, $dbname);

//Jika koneksi gagal
if ($mysqli->connect_errno){
    die($mysqli->connect_error);
}