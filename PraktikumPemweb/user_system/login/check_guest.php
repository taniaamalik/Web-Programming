<?php

session_start();
if(isset($_SESSION['user_system_logged_in'])){
    header('Location: index.php');
}
