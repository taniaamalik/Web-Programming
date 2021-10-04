<html>
     <head>
         <title>Tambah Program Kerja BEM</title>
     </head>
     <body>
       <table>
         <tbody>
          <tr><td>
          <h2> Tambah Program Kerja BEM </h2>
          <form method="post" action="">
             <table><tr>
             <td><label>Nomor Program Kerja</label></td>
             <td><input type="text" name="nomor" value=""></td>
             </tr><tr>
             <td><label>Nama Program Kerja</label></td>
             <td><input type="text" name="nama_program" value=""></tr>
             <tr>
             <td><label>Surat Keterangan</label></td>
             <td><input type="text" name="surat_keterangan" value=""></td>
             </tr></table>
             <input type="submit" name="tambah" value="Submit">        
             </form>
             </td></tr>
        </table>
     </body>
 </html> 
<?php
     if (isset($_POST['tambah'])){
         $control = new c_programKerja();
         $control->insert();
     } 
?>
