<?php
function ParniBrojevi1($a) {
    echo $a , "<br>";
    $a += 2;
}
function ParniBrojevi2($b) {
    $b ++;
    ParniBrojevi1($b);
}