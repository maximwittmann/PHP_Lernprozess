<?php
$monate="xxx,januar,februar,maerz,april,mai,juni,"
       ."juli,august,september,Oktober,November,Dezember";
$arrMonate=explode(",",$monate);
echo date("j. ");
echo $arrMonate[date("n")];
echo date(" Y");
