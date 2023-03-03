<?php

$nilai = 74;
if ($nilai > 85) {
    $grade = "A";
}elseif ($nilai > 75){
    $grade = "B";
}elseif ($nilai > 65){
    $grade = "C";
}elseif ($nilai > 50){
    $grade = "D";
}else {
    $grade = "F";
}

echo "Nilai anda : $nilai<br>";
echo "Grade : $grade";


$angka = 29;

echo "Bilangan $angka merupakan <br>";

if($angka %  2 == 0){
    echo "Bilangan Genap";
}else{
    echo "Bilangan Ganjil";
}
