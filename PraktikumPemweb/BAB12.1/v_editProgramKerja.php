<html>
     <head></head>
     <body>
       <table>
         <tbody>
          <tr><td>
          <h2> Edit Program Kerja BEM </h2>
          <form method="post" action="#">
             <input type="hidden" name="nomor" value="<?php echo $proker['nomor']?>">
             <table><tr>
             <td><label>Nama Program Kerja</label></td>
             <td><input type="text" name="nama_program" value="<?php echo $proker['nama_program'] ?>"></td>
             </tr><tr>     
             <td><label>Surat Keterangan</label></td>
             <td><input type="text" name="surat_keterangan" value="<?php echo $proker['surat_keterangan'] ?>"></td>
             </tr></table><br>
             <input type="submit" name="edit" value="Submit">        
             </form>
             </td></tr>
       </table>
     </body>
 </html> 
<?php
     if (isset($_POST['edit'])){
         $control = new c_programKerja();
         $control->update();
     } 