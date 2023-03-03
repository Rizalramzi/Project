<?php

$ayam = ["Hisana", "KFC", "MCD", "Sabana", "Rocket", "Geprek Bensu", "CFC", "Laziza", "Albaik", "Ayam bakar pak D", "A&W"];
sort($ayam);
$jm = count($ayam);
for ($x = 0; $x < $jm; $x++) {
    echo "$ayam[$x] <br>";
}

$ayam = ["Hisana", "KFC", "MCD", "Sabana", "Rocket", "Geprek Bensu", "CFC", "Laziza", "Albaik", "Ayam bakar pak D", "A&W"];
foreach ($ayam as $x){
    echo "$x <br>";
}

for($i = 2; $i<1000; $i+2);
echo $i;