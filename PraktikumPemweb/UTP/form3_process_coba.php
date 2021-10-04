<?php
$Mandiri = ['155150201111320', '145150101131244'];
$SBM = ['165210401242122', '185220101248298'];
$SNM = ['175210105124343', '155220207704958'];
    $jalur = $_POST['jalur']; 
    if($jalur==strcasecmp("Mandiri", "mandiri")){
        foreach ($Mandiri as $mandiri) {
            echo "Jalur Mandiri : $mandiri<br>";
        }
    }else if($jalur=="SBMPTN"){
            foreach ($SBM as $sbm) {
                echo "Jalur SBMPTN : $sbm<br>";
            }
              } else if($jalur=="SNMPTN"){
                foreach ($SNM as $snm) {
                    echo "Jalur SNMPTN : $snm<br>";
                  }
    } else {
    echo "Data unvalid, check INPUT please!";
}