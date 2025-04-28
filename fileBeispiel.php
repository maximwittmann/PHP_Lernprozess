<?php
$name="./Daten/beispiel.txt";
$datei=fopen($name, "w");
for ($i=0;$i<10;$i++) {
 fwrite($datei,"Freitag\n");
}
fclose($datei);

