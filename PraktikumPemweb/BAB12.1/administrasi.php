<?php
$conn = new mysqli("localhost", "root", "Iryana1512", "oop");
     $n = $_POST['nim'];
     $pass = $_POST['password'];
     $query = "CALL SP_Login('$n','$pass')";
     $hasil = $conn->query($query);
     if($hasil->num_rows > 0){
         $nama = "";
         $nim = "";
         $password = "";
         $jabatan = "";
         while($data = $hasil->fetch_object()){
             $nama = $data->nama;
             $nim = $data->nim;
             $password = $data->password;
             $jabatan = $data->jabatan;
         }
         require 'pengurusBEM.php';
         $pb = new pengurusBEM();
         $pb->setJabatan($jabatan);
         $pb->setNama($nama);
         $pb->setNim($nim);
         $pb->pilih();
     } else{
         header('location: FormLogin.php?e=1');
     } 