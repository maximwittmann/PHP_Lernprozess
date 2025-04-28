<pre>
<?php
header('Content-Type:text/html;charset=ISO-8859-1');
for($i=1;$i<=255;$i++){
    echo "$i - Okt: ";
    echo decoct($i)." - Hex: ";
    echo dechex($i)." - Bin: ";
    echo decbin($i)." - Asc: ";
    echo chr($i)."<br>";
}
?>
</pre>
