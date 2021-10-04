<?php
   class ambilData{
       public function __construct() {
       require 'koneksiMVC.php';
       }
       public function getSemuaProgramKerja() {
         $rs = $this->mysqli->query("SELECT * FROM program_kerja");
         while ($row = $rs->fetch_assoc()) {
           $this->hasil[] = $row;
       }
         return $this->hasil;
       }
     }
     $ad = new ambilData();
     $proker = $ad->getSemuaProgramKerja();
 ?> 
<html>
   <head>
      <title> Daftar Proker BEM </title>
   </head>
   <body>
      <h2>Daftar Program Kerja BEM </h2>
      <h1></h1>
         <table border="1">
             <tbody>
                 <tr><b><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td></b></tr>
             </tbody>
             <?php
             foreach ($proker as $row) {
                 echo " <tr>
                        <td> $row[nomor]</td>
                        <td> $row[nama_program]</td>
                        <td> $row[surat_keterangan]</td>
                  </tr>  ";
             }
             ?>
         </table>
         <br/>
         <form action="FormLogin.php" method="post">
             <input type="submit" value="Logout">
         </form>
     </body>
 </html>