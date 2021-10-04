<?php

//skip: check login

include_once 'db.php';

$sql = 'SELECT * FROM post';
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <?php while ($row = $result->fetch_object()): ?>
            <tr>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->title;?></td>
                <td><?php echo $row->content;?></td>
            </tr>
            <?php endwhile;?>
        </table>
    </body>
</html>
