<?php
$str1 ='Fakultas.Ilmu.Komputer.UB';
echo "Sebelumnya : $str1 <br>";
echo "Menjadi : ";
$motongstr1 = explode(".", $str1);
print_r ($motongstr1);
