<?php
if (isset($_POST['nim']) AND strlen($_POST['nim'])==15) {
    
$nim = $_POST['nim']; 
$sub1 = substr($nim,0,2);
$sub2 = substr($nim,2,3);
$sub4 = substr($nim,7,3);

$tahun = date("Y");
$subthn = substr($tahun,2,2);
echo "Lama Kuliah : ".($subthn-$sub1)." tahun<br>";
if($sub2==515){
    echo "Fakultas : filkom<br>";
}else if($sub2==521){
}else if($sub2==522){
    echo "Fakultas : ftp<br>";
}

if($sub4==011){
    echo "Jalur Masuk : mandiri<br>";  
} else if($sub4==012){
    echo "Jalur Masuk : sbm<br>";  
}else{
    echo "Jalur Masuk : snmptn<br>";  
}

} else {
    echo "Data unvalid, check NIM please!";
}