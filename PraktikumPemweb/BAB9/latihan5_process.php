<?php
	$myFile = "guestbook.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$input = $_POST["nama"].';'.$_POST["komentar"];
	fwrite($fh, $input);
	fclose($fh);

	$fh = fopen($myFile, 'r') or die("can't open file");
	$data = fread($fh, filesize($myFile));
	$wordChunks = explode(";", $data);
	foreach($wordChunks as $arr){
		echo $arr." ";
	}
	fclose($fh);
	