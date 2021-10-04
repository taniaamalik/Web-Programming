<!DOCTYPE html>
<html lang=”en”>
<head>
  <meta charset="utf-8">
  <title>Untitled Document</title>
</head>
<body>
<?php  
	$angka = $_POST["angka"];  
	function factorial($number){   
		if($number < 2){    
			return 1;   
		}else{    
			return ($number * factorial($number-1));   
		}  
    }  
    echo "Angka yang dimasukkan : ".$angka."<br>";
    echo "Nilai faktorial : ".factorial($angka)."<br>";
	$arr = ["Angka yang dimasukkan"=>$angka, "Nilai faktorial"=>factorial($angka), "NIM"=>"175150201111053", "Nama"=>"Tania Malik Iryana"];
	session_start();  
    $_SESSION["arr"] = $arr;
?>  
	<a href="Lat3_3c.php">Menampilkan isi array</a>
</body> 
</html>