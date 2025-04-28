<?php
$name="./Daten/zaehler-".date("Y-m-d").".txt";

if(!file_exists($name)){
    $datei=fopen($name, "w");
    $z=1;
    fwrite($datei, $z);
    fclose($datei);
}
else{
    $datei=fopen($name, "r");
    $z=fread($datei, 4096);
    fclose($datei);
}

echo "Sie sind der $z. Besucher meiner Seite.";
$z++;
$datei=fopen($name, "w");
fwrite($datei, $z);
fclose($datei);
?>