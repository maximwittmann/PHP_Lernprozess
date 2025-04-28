<?php
$datei=fopen("./Daten/links.txt","r");

while(!feof($datei)){       //Leseschleife
    $zeile=fgets($datei);       //Vor-Lesen
    $teile=explode(",",$zeile);
    echo '<a href="'.$teile[1].'" target="_blank">'.$teile[0].'</a><br>';
}
fclose($datei);