<pre>
<?php
$arrLotto=range(1,49);
shuffle($arrLotto);
$ziehung=array_slice($arrLotto,0,6);
/*
 for($i=0;$i<6;$i++){
  $ziehung[]=$arrLotto[$i];
}
*/
sort($ziehung);
print_r($ziehung);

?>
</pre>

