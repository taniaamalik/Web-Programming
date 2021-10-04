<html><body>
	<?php
	$a = 3;
	$b = '3';
	$c = 5;
	var_dump($a == $b);//membandingkan isi nya saja
	print ("<br>");
	var_dump($a === $b); //membandingkan isi dan tipe data
	print ("<br>");
	var_dump($a != $b);
	print ("<br>");
	var_dump($a !== $b);
	print ("<br>");
	var_dump($a == $c);
	print ("<br>");
	var_dump($a <> $c);
	print ("<br>");
	
	$name = "Guido";
	echo "Hi, $name<br>"; //interpolasi, isinya nilai variable diambil
	echo 'Hi, $name<br>'; //isinya gadiambil
	
	$n = 12;
	echo "You are the {$n}th person"; //biar thnya kepisah dari isi variable
	?>
</body></html>