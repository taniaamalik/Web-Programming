<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>Login</h1>
        <?php if (isset($_GET['error'])){
            echo '<strong>Ada Kesalahan Pengisian</strong>';
            //kalau tanpa required dan kotaknya kosong
        } ?>
        <form action=login_process.php method=POST>
            <label>Username:
                <input type=text name=username autofocus required maxlength=10>
            </label><br>
            <label>Password:
                <input type=password name=password required>
            </label><br>
            <input type=submit value=Login>
        </form>
    </body>
</html>