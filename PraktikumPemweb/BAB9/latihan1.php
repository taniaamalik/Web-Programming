<?php
  $myFile = "testFile1.txt";
  $fh = fopen($myFile, 'r');
  $theData = fread($fh, 5); 
  fclose($fh);
  echo $theData;
  