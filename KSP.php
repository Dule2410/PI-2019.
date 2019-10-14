<?php
$KSP = array("Kamen" , "Skare" , "Papir");
$rand_keys = array_rand($KSP,2);
echo "Prvi igrac: " , $KSP[$rand_keys[0]] , "<br>";
echo "Drugi igrac: " , $KSP[$rand_keys[1]];

