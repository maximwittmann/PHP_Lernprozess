<pre>
<?php
$zahl=array("Null","Eins","Zwei","Drei","Vier","Fünf","Sechs","Sieben","Acht","Neun");
$wert=rand(1000,100000);

$ziffern=str_split($wert);
echo "$wert = ";

$text="***";
foreach($ziffern as $v){
    $text.=$zahl[$v]."-";

}
echo trim($text,"-")."***";





?>
</pre>

