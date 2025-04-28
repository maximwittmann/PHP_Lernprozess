
<?php
$link=file("Daten/links.txt");
//print_r($link);

foreach($link as $ziel){
   $teile=explode(",",$ziel);
   echo '<a href="'.$teile[1].'" target="_blank">'.$teile[0].'</a><br>';
}