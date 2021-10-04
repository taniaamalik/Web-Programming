<?php
include_once 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];
$sql = "INSERT INTO post (title,content) VALUES ('$title','$content')";

$mysqli->query($sql);

if(!$result){
    echo 'SQL execution error';
}else{
    header('Location:post.php');
}

header('Location:post.php');