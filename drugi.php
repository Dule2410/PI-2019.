<?php
$imenik = array ("Luka" => array("Matematika" => "5" , "Fizika" => "3" , "Hrvatski" => "5")
                , "Matej" => array("Matematika" => "4" , "Fizika" => "3" , "Hrvatski" => "4")
                , "Kerim" => array("Matematika" => "5" , "Fizika" => "5" , "Hrvatski" => "2"));
foreach ($imenik as $key_arr => $ocj_arr) {
    $ukupno = 0;
    $prosjek = 0;
    echo "<b>$key_arr</b>";
    echo "<br>";
    $dummy = $imenik[$key_arr];
    foreach ($dummy as $key2_arr => $ocj2_arr) {
        echo "$key2_arr = $dummy[$key2_arr] <br>";
        $ukupno += $dummy[$key2_arr];
    }
    $prosjek = $ukupno / 3;
    echo "Prosjek: " , $prosjek;
    echo "<br>";
    echo "<br>";
}