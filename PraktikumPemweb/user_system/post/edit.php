<?php

$id = $_GET['id'];

// jika parameter id tidak ada
if(!$id){
    header('Location: post.php');
}

include_once 'db.php';

$sql = "SELECT * FROM post WHERE id = $id";
$result = $mysqli->query($sql);

//jika post tidak ditemukan
if(!$result->num_rows){
    header('Location: post.php');
}

$post = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
</head>
<body>
    <form action="edit_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $post->id; ?>">
        <label>
            Title:
            <input type="text" name="title" value="<?php echo $post->title; ?>"required autofocus>
        </label>
        <br>
        <label>
                Content:
        <textarea name="content" cols="50" rows="15" requred><?php echo $post->content; ?></textarea>
        </label>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>