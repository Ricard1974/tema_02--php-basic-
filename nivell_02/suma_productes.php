<?php


$vcho=1; // 1 euro valor de la choco
$ncho= 2;// numero de chocos

$vxic=0.5;
$nxic=1;

$vcar=1.5;
$ncar=1;


function chocolata($vcho,$ncho){
    $rescho= $vcho * $ncho;
    return $rescho;
}
$total_choco=chocolata($vcho,$ncho);
// echo $total_choco;

function xiclet($vxic, $nxic){
    $resxic= $vxic * $nxic;
    return $resxic;
}

$total_xic=xiclet($vxic,$nxic);
// echo $total_xic;

function carmels($vcar,$ncar){
    $rescar= $vcar * $ncar;
    return $rescar;
}
$total_car=carmels($vcar,$ncar);
// echo $total_car;

function suma_productos($total_car,$total_choco,$total_xic){
    $suma= $total_car +$total_choco + $total_xic;
    return $suma;
}
$suma_total= $total_car+$total_choco+$total_xic;
echo $suma_total;
?>