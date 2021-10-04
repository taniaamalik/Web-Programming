<?php

include_once 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = "UPDATE post SET title = '$title', content = '$content' WHERE id= '$id'";

$mysqli->query($sql);

header('Location: post.php');