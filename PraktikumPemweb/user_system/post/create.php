<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <form action="create_process.php" method="post">
        <label>
            Title:
            <input type="text" name="title" required autofocus>
        </label>
        <br>
        <label>
                Content:
        <textarea name="content" cols="50" rows="15" requred></textarea>
        </label>
        <br>
        <input type="submit" value="Post">
    </form>
</body>
</html>