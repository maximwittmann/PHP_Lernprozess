<pre>
<form action="" method="post">
<input type="text" name="such" placeholder="Gesuchter Ort">
<input type="submit" name="submit">
</form>
</pre>
<?php
//Assoziative Arrays
$kennz["HH"]="Hansestadt Hamburg";
$kennz["HWI"]="Hansestadt Wismar";
$kennz["DD"]="Domstadt Dresden";
$kennz["D"]="Dortmund";
$kennz["DU"]="Düsseldorf";
$kennz["SE"]="Segeberg";
$kennz["PI"]="Pinneberg";

/*
asort($kennz);
foreach($kennz as $k=>$v){
    echo "$k = $v<br>";
}
*/

if(isset($_POST["such"])){
    $eingabe=strtoupper($_POST["such"]);

    if(array_key_exists ($eingabe, $kennz)){
       echo "$eingabe: $kennz[$eingabe]";
    }
    else
        echo "nicht gefunden";
}
?>