<?php


$niz = array("1","2","3","4","5","6","7","8","9","10");


echo "1. ZADATAK <br> <br>";
$indeks = 0;
foreach ($niz as $a) {
    if ($a % 4 != 0) {
        echo "[" , $indeks , "] = " , $a;
        echo "<br>";
        $indeks += 1;
    }
}
echo "<br> <br>";



echo "2. ZADATAK <br> <br>";
$suma1 = 0;
foreach ($niz as $b) {
    if ($b % 2 == 0) {
        $suma1 += $b;
    }
}
echo "Suma = " . $suma1;
echo "<br> <br>";



echo "3. ZADATAK <br> <br>";
$ar_sr = 0;
$suma2 = 0;
foreach ($niz as $c) {
    $suma2 += $c;
    $ar_sr = $suma2 / 10;
}
echo "Suma = " . $suma2 . "<br>";
echo "Aritmeticka sredina = " . $ar_sr . "<br>";
echo "<br> <br>";



echo "4. ZADATAK <br> <br>";
$br_cl = 0;
$suma3 = 0;
foreach ($niz as $d) {
    if ($d % 2 == 0) {
        $br_cl += 1;
        $suma3 += $d;
    }
}
echo "Broj clanova sa parnim indeksom: " . $br_cl . "<br>";
echo "Suma = " . $suma3 . "<br>";
echo "<br> <br>";