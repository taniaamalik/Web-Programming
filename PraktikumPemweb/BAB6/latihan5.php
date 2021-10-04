<?php
$cari = 5;
$array = [1,3,5,7,10];
echo "Apakah nilai " .$cari. " ada didalam array? <br>";
function cari($array, $cari):bool {
	foreach ($array as $arr) {
		if($cari == $arr){
			return true;
		}
	}
	return false;
}
	if (cari($array, $cari)==true){
		echo "Ada";
	}else{
		echo "Tidak Ada";
	}
	