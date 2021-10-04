<?php
$jalurmasuk = ['155150201111320', '145150101131244', '165210401242122', '185220101248298', '175210105124343', '155220207704958'];
$jalur = $_POST['jalur'];

$Mandiri = [];
$SBM = [];
$SNM = [];

for($i = 0; $i < sizeof($jalurmasuk); $i++) {
    $sub = substr($jalurmasuk[$i],7,3);
    if($sub=='011'){
        $Mandiri[] = $jalurmasuk[$i];
    }else if($sub=='012'){
        $SBM[] = $jalurmasuk[$i]; 
    }else{
        $SNM[] = $jalurmasuk[$i]; 
    }
}

if($jalur=="Mandiri"){
    echo "Jalur Mandiri :<br>";
        foreach ($Mandiri as $mandiri) {
            echo $mandiri."<br>";
        }
}else if($jalur=="SBMPTN"){
    echo "Jalur SBMPTN :<br>";
        foreach ($SBM as $sbm) {
            echo $sbm."<br>";
        }
} else if($jalur=="SNMPTN"){
    echo "Jalur SNMPTN :<br>";
        foreach ($SNM as $snm) {
            echo $snm."<br>";
        }
} else {
    echo "Data unvalid, check INPUT please!";
}