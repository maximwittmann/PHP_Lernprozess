<pre>
<?php
$eingabe=strtolower("Blindtext");
$wort=str_split($eingabe);
//print_r($wort);
$alphabet=range('a', 'z');

print_r(array_count_values($wort));

/*
foreach (count_chars($eingabe, 1) as $i => $val) {
    echo "$val mal \"", chr($i), "\"\n";
}
*/
?>
</pre>

