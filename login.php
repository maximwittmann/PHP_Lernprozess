<pre>
<?php
$user="max";
$pw="geheim";
//var_dump($_POST);
//print_r($_POST);

if($_POST["name"]==$user && $_POST["pass"]==$pw){
?>
<a href="http://www.cbm.hamburg" target="_blank">CBM</a>
<a href="http://www.hamburg.de" target="_blank">Hamburg</a>
<?php
}
else{
    echo "Du kommst hier nicht rein!";
}

?>
</pre>