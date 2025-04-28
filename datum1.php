<?php
 echo "Der ";
 $datum=mktime(0,0,0,12,92,2024);
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