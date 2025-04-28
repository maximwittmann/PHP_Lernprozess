<pre>
<?php
$link[]="Hamburg, http://www.hamburg.de";
$link[]="Kiel, http://www.kiel.de";
$link[]="Berlin, http://www.berlin.de";
$link[]="Bremen, http://www.Bremen.de";

foreach($link as $ziel){
   $a=explode(",",$ziel);
   echo '<a href="'.$a[1].'" target="_blank">'.$a[0].'</a><br>';
}


?>
</pre>

