<?php
$filkom = true;
if($filkom){
	echo "<h1>FILKOM</h1>";
}
else {
	echo "<h1>Bukan FILKOM</h1>";
}
$person = ['Dadang', 'Jajang', 'Udin', 'Rendra'];
echo $person[1];
$a = 4;
$b = 5;
echo  "<br> a = 4 <br> b=5";
echo "<br>hasil =", ++$a;
echo "<br>operator logika |", $a==$b;
echo "<br>operator logika |", $a<$b;
echo "<br>operator logika |", $a!=$b;
?>
