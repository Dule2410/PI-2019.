<?php
include ("ParniBrojevi_funkcija.php");
$a = 2;
if ($a % 2 == 0) {
    while ($a < 100) {
        ParniBrojevi1($a);
    }
}

if ($a % 2 != 0) {
    while ($a < 100) {
        ParniBrojevi2($a);
    }
}