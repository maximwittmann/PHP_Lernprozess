<pre>
<?php
$subjekt=["Hans","Der Hund","Die Stadt","Birgit","Flensburg"];
$verb=["bellt","singt","tanzt","tropft","hüpft","arbeitet","feiert"];
$adjektiv=["laut","leise","bunt","nass","langsam","komisch","süß"];

$z=array_rand($subjekt,1);
echo $subjekt[$z]." ";

echo $verb[array_rand($verb,1)]." ";

echo $adjektiv[rand(0, count($adjektiv)-1)].".";


?>
</pre>

