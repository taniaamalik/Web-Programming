<html> 
<head>
     <h1>Login</h1> 
</head> 
<style>
     #nim,#pass{
         width: 200px;
         padding: 5px 10px;
         margin: 8px 8px;
         border: 1px solid #ccc;
         border-radius: 4px;     
}
#tombol{
         padding: 8px 20px;
         font-family: Calibry;
         margin-top: 5px;
         background-color: deepskyblue;
         cursor: pointer;
         color: white;
         border: none;
     }
     h1{
         font-family: Calibri;
         color: deepskyblue;
     }
     p1,p2{
         font-family: Calibri;
         padding-left: 55px;
     } 
</style> 
<body>
     <form action="administrasi.php" method="post">
         <table>
             <tr>
                 <td><p1>NIM</p1></td>
                 <td> : </td>
                 <td><input type="text" id="nim" name="nim" placeholder="username"><br/></td>
             </tr>
             <tr>
                 <td><p2>Password</p2></td>
                 <td> : </td>
                 <td><input type="password" id="pass" name="password" placeholder="password"><br/></td>
             </tr>
             <tr>
                 <td><input type="submit" id="tombol" name="tombol" value="Login"></td>
                 <td></td>
                 <td></td>
             </tr>
         </table>
     </form> 
</body> 
<!-- <?php     
     if(isset($_GET['e'])){
         if($_GET['e']==1){
             echo "NIM atau Password Salah!";
         } else if($_GET['e']==2){
             echo "Terjadi Kesalahan, Silahkan Login Kembali!";
         }
     }
?> -->
</html>