 <html>
<head></head>
<body>
<h2>Daftar Program Kerja BEM</h2>
  <table>
    <tbody>
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
      </tr>
    </tbody>
    <?php
    foreach ($proker as $row) {
    echo "<table><tr>",
    "<td>$row[nomor]</td>",
    "<td>$row[nama_program]</td>",
    "<td>$row[surat_keterangan]</td>",
    "</tr></table>";
    }
    ?>
</body>
</html>