<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>Search</h1>
        <form action=search_process.php method=get>
            <label>Search:
                <input type=text name=keyword autofocus>
            </label><br>
            <input type=submit value=Search>
        </form>
    </body>
</html>
<!-- fungsi label biar tulisan search/label nya bisa diklik lalu bisa nulis di kotak
kalau tidak pakai label, harus klik kotaknya
paling terlihat kalo pake checkbox, kalo nggak pake label, harus diklik di kotaknya
kalo pake label,bisa klik tulisan
autofocus biar bisa langsung di klik -->