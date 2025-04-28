<?php
//100 Zufallszahlen zwischen 10 und 1579
for($i=0; $i<100; $i++){
   $arr[]=rand(10,1579);
   //echo $arr[$i]." ";
}
sort($arr);
echo "<table border><tr>";
for($i=0; $i<100; $i++){
    echo "<td>$arr[$i]</td>";
    if(($i+1)%10==0){
        echo "</tr><tr>";
    }

}
echo "<hr>";
echo "Durchschnitt: ".array_sum($arr)/count($arr);

