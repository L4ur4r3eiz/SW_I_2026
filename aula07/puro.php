<?php 
$msc = "Sua média é: ";
$nome = "User";
$m1 = 8;
$m2 = 9;
$m3 = 1;
$media = 0;

$media = (($m1 + $m2 + $m3)/3);

if ($media >=9){
    echo "MB";
}

if ($media <8 && $media >= 7){
    echo "B";
}

if ($media <7 && $media >= 4){
    echo "R";
}

if ($media < 4){
    echo "I";
}

