<?php
  $myFile = "testFile1.txt";
  $fh = fopen($myFile, 'r');
  for($i=0;$i<2;$i++){
  $theData = fgets($fh);
  }
  fclose($fh);
  echo $theData;
  