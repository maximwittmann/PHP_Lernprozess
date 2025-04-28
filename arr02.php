<pre><?php
$bunt[3]="Hans";
$bunt[7]="Ursula";
$bunt[23]="Hilde";
$bunt[5]="Badis";
$bunt[12]="Hanno";

krsort($bunt);
foreach($bunt as $i => $wert){
    echo "$i = $wert<br>";
}

//print_r($bunt);

?>
</pre>