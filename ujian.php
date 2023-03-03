<?php

$pndpt = 250000;
$ujsa = 10000;
$ujsb = 20000;
$ujsc = 30000;
$kmsa = ($pndpt) * 10/100;
$kmsb = ($pndpt) * 15/100;
$kmsc = ($pndpt) * 20/100;
$jmlha = $ujsa + $kmsa;
$jmlhb = $ujsb + $kmsb;
$jmlhc = $ujsc + $kmsc; 

if($pndpt == 200000){
    echo "Pendapatanmu hari ini = $jmlha";
}elseif($pndpt < 200000){
    echo "Pendapatanmu hari ini = $jmlhb";
}elseif($pndpt < 500000){
    echo "Pendapatanmu hari ini = $jmlhc";
}