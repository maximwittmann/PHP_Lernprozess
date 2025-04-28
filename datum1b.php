<?php
//Ein zufälliges Datum soll zwischen dem
//1.1.1950 und dem 31.12.2050 liegen...
 
 echo "Der ";
 $datum=mktime(0,0,0,rand(1,12),rand(1,31),rand(1950,2050));
 echo date("d.m.Y", $datum);
 echo " ist ein ";
 $w=date("w", $datum);
 if($w==1){echo "Montag.";}
 else if($w==2){echo "Dienstag.";}
 else if($w==3){echo "Mittwoch.";}
 else if($w==4){echo "Donnerstag.";}
 else if($w==5){echo "Freitag.";}
 else if($w==6){echo "Samstag.";}
 else if($w==0){echo "Sonntag.";}
?>