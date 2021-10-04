<?php
  $namahost = "localhost";
  $username = "root";
  $password = "Iryana1512";
  $database = "praktikumweb"; 
  $con = mysqli_connect($namahost,$username,$password) or die("Failed");	
  mysqli_select_db($con, $database) or die(mysqli_error($con));
  