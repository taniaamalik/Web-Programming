<?php
  if (isset($_POST['nim']) AND strlen($_POST['nim'])==15) {
$nim = $_POST['nim']; 
$sub1 = substr($nim,0,2);
$sub2 = substr($nim,2,3);
$sub3 = substr($nim,5,2);
$sub4 = substr($nim,7,3);
$sub5 = substr($nim,10,5);
echo "NIM : ".$nim."<br>";
echo "Angkatan : ".$sub1."<br>";
$tahun = date("Y");
$subthn = substr($tahun,2,2);
echo "Lama Kuliah : ".($subthn-$sub1)." tahun<br>";
if($sub2==515){
    echo "Fakultas : filkom<br>";
    if($sub3==01){
        echo "Prodi : tif<br>";
    }else if($sub3==02){
        echo "Prodi : si<br>";
    }else if($sub3==03){
        echo "Prodi : pti<br>";
    }else if($sub3==03){
        echo "Prodi : pti<br>";
    }else if($sub3==04){
        echo "Prodi : ti<br>";
    }
}else if($sub2==521){
    echo "Fakultas : fisip<br>";
    if($sub3==01){
        echo "Prodi : sosiologi<br>";
    }else if($sub3==02){
        echo "Prodi : politik<br>";
    }
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

echo "Nomor Urut Pendaftaran : ".$sub5."<br>";

} else {
    echo "Data unvalid, check NIM please!";
}