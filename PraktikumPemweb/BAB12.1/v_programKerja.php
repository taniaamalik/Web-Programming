<html>
<head></head>
<body>
<h2>Daftar Program Kerja BEM</h2>
<h3><input type="button" value="Tambah Proker" onclick="window.location.href='?i=1'"></h3>
  <table border="1">
    <tbody>
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
        <td colspan = "2"> Aksi</td>
      </tr>
    </tbody>
    <?php
    foreach ($proker as $row) {
    echo "<tr>",
    "<td>$row[nomor]</td>",
    "<td>$row[nama_program]</td>",
    "<td>$row[surat_keterangan]</td>",
    "<td><a href='?u=$row[nomor]'>Edit </a></td>",
    "<td><a href='?d=$row[nomor]'>Delete </a></td>",
    "</tr>";
    }
  ?>
</table>
<br/>
<form action="FormLogin.php" method="post">
  <input type="submit" value="Logout">
</form>
</body>
</html>