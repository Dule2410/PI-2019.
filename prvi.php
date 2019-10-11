<?php
$ocjene = array("Matematika" => "4", "Fizika" => "2", "Hrvatski" => "3");
$prosjek = ($ocjene["Matematika"] + $ocjene["Fizika"] + $ocjene["Hrvatski"]) / 3;
echo "Matematika: " , $ocjene["Matematika"];
echo "<br>";
echo "Hrvatski: " , $ocjene["Hrvatski"];
echo "<br>";
echo "Fizika: " , $ocjene["Fizika"];
echo "<br>";
echo "Prosjek ocjena je: " , $prosjek;