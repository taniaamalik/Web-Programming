<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>Input</h1>
        <form action=form_process.php method=POST>
            <label>NIM:
                <input type=number name=nim autofocus required maxlength=15>
            </label><br>
            <input type=submit value=Input>
        </form>
    </body>
</html>