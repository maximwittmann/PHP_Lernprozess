<pre>
<?php
$datei=fopen("./Daten/links.txt","a");
/*
$ort=$_POST["ort"].",";
$link=$_POST["link"]."\n";
fwrite($datei,$ort);
fwrite($datei,$link);
*/
$zeile=$_POST["ort"].",".$_POST["link"]."\n";
fwrite($datei,$zeile);
fclose($datei);
?>
</pre>

