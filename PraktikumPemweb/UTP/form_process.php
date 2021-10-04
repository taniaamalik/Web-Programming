<?php
if (isset($_POST['nim']) AND strlen($_POST['nim'])==15) {
  echo '<script> alert("Success Input");</script>';
} else {
 echo '<script> alert("Data unvalid, check NIM please!");</script>';
}
?>