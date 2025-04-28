<?php
for ($i=0; $i<10; $i++) {
   $j=rand(1700,2400);
   echo "$j ist ";
   if(date("L",mktime(0,0,0,1,1,$j))==0)
      echo "k";
   echo "ein Schaltjahr.<br>";
}

