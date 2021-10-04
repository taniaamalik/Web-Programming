<?php
  $numberedString = "1234567890123456789012345678901234567890";
  $nssplit = str_split($numberedString);
  $jmlns = count($nssplit);
  
  $second = 0;
	for($i = 0; $i<$jmlns; $i++){
		if($nssplit[$i] == 5){
			echo "The position of 5 in our string was $i"; 
			$second = $i+1;
			break;
		}
	}
	for($j=$second; $j<$jmlns; $j++){
		if($nssplit[$j] == 5){
			echo "<br>The position of the second 5 was $j"; 
			break;
		}
	}
	