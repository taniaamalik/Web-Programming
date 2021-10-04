<?php
  //ganti mySQLUserName dengan username dari server mySQL Anda
  //ganti mySQLPassWord dengan password dari server mySQL Anda

  $mysqli = new mysqli('localhost', 'root', 'Iryana1512', 'praktikumWeb');
  $rs = $mysqli->query("CALL SP_Login ('".$_POST['username']."','".$_POST['password']."')");
  $row = $rs->fetch_object();

  if ($row) {
    header("location: Lat5_1.php");
  } else {
    echo "Data tidak terdaftar";

    //nama file form login yang dibuat di Latihan 4
    header('Location: form_login.html');
  }
