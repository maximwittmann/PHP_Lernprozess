<?php
header("content-type:text/html; charset=utf8_unicode_ci");
$link=file("Daten/links.txt");
$html=fopen("Daten/links.html","w");
fwrite($html,"<link=\"style.css\" rel=\"stylesheet\" type=\"text/css\">\n");

//print_r($link);

foreach($link as $ziel){
   $teile=explode(",",$ziel);
   $zeile="<a href=\"".trim($teile[1])."\" target=\"_blank\">$teile[0]</a><br>\n";
   fwrite($html,$zeile);
}
fclose($html);

readfile("Daten/links.html");
?>

