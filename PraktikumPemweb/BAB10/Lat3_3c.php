<?php
    session_start();   
    $arr = $_SESSION["arr"];   
    foreach($arr as $key => $value){    
      echo "$key : $value"."<br>";   
    }   
    session_destroy();