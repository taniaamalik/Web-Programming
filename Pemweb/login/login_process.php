<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)){
    header ('Location: login.php?error=1'); //spasi PENTING!!
}

if ($username == 'admin' && $password == '123456'){
  echo '<h1>Login Succeess</h1>';
} else {
    echo '<h1>Login Fails</h1>';
}

//label berfungsi supaya kalo tulisannya di klik, langsung ke kotak
//sangat terlihat ketika checkbox
//autofocus biar tidak perlu klik, langsung tulis
//required biar harus diisi
//maxlength maksimal karakter yang bisa buat diketik
//validasi di sisi klien (sebelum disubmit) biar efisien
//validasi di sisi server (sesudah disubmit) soalnya klien bisa merubah codingan
