<?php
$min=$max=rand(1,100);
echo "$min ";

for($i=2;$i<=10; $i++) {
   $z=rand(1,100);
   echo "$z ";
   if($z<$min){
       $min=$z;
   }
   else if($z>$max){
       $max=$z;
   }
}
echo "<br>Minimum: $min";
echo "<br>Maximum: $max";
?>



