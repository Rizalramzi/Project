<?php

$angka = 29;

echo "Bilangan $angka merupakan <br>";

if($angka %  2 == 0){
    echo "Bilangan Genap";
}else{
    echo "Bilangan Ganjil<br>";
}



$harga = 150000;
$potongan = $harga *5 / 100;
$total = $harga - $potongan;

if($harga >= 100000){
    echo "Anda mendapatkan diskon sebesar 5%<br>";
    echo "Total pembelian setelah diskon 5% = Rp.$total<br>";
}else{
    echo "Anda tidak mendapatkan diskon <br>";
    echo "Total pembelian anda adalah = Rp.$harga<br>";
}

$a = 9;
$b = 3;
$c = $a/$b;


if($b == 0){
    echo "Tidak bisa dilakukan<br>";
}else {
    echo "hasilnya adalah = $c<br>";
}

$x = 39;
$y = 345;
$z = $x - $y;
$m = $y - $x;

if($x>$y){
    echo "Selisihnya adalah = $z<br>";
}else{
    echo "Selisihnya adalah = $m<br>";
}

$a = -2;
$b = -4;

if($a and $b < 0 ){
    echo "tidak bisa dijalankan<br>";
}else{
    $hasil=$a - $b;
    echo "$hasil<br>";
}

for($a=1; $a <=100; $a++){
    if($a %2 == 0){
        echo "<h3>$a<h3>";
    }
}

for($c=10; $c>=1; $c--){
    echo "$c<br>";
}

for($a=1; $a <=10; $a++){
    echo "$a<br>";
}

