<pre>
<?php
$a=["Hamburg","Kiel","Berlin","Bonn","Flensburg","Hameln","Pirmasens"];
print_r($a);
$z=array_rand($a,1);
echo "<hr>$a[$z]";
//echo "<hr>".$a[array_rand($a,1)];

?>
</pre>

