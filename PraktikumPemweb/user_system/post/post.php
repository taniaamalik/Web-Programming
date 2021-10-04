<?php

include_once 'db.php';

$sql = "SELECT * FROM post";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h1>Post</h1>

    <a href="create.php">Create</a>

    <?php

    if(!$result->num_rows){
    echo 'No post.';
    }else{
        while ($post = $result->fetch_object()){
            echo "<h3>$post->title</h3>";
            echo "<a href=\"edit.php?id=$post->id\">Edit</a>";
            echo "<form action=\"delete.php\"method=\"post\"><input type =\"hidden\"name=\"id\" value=\"$post->id\"><input type=\"submit\" value=\"Delete\"></form>";
            echo "<p align=\"justfiy\">$post->content</p>";
        }
    }
    ?>
</body>
</html>