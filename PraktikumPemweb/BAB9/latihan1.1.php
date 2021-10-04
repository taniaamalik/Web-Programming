<?php
  $myFile = "testFile1.txt";
  $fh = fopen($myFile, 'r');
  $theData = fread($fh, filesize($myFile)); 
  fclose($fh);
  echo $theData;