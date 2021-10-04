<?php

include_once 'db.php';

$id =$_POST['id'];
$sql = "DELETE FROM post WHERE id = $id";

$mysqli->query($sql);

header('Location: post.php');