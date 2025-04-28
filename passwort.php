<?php
$zeichen="a,b,c,d,e,f,g,h,k,m,n,p,q,r,s,t,x,y,z,"
        ."A,B,C,D,E,F,G,H,K,L,M,N,P,Q,R,S,T,Y,X,Z,"
        ."1,2,3,4,5,6,7,8,9,+,*,-,_,!,(,),=,&,.";
$arr=explode(",",$zeichen);
shuffle($arr);

$pass="";
for($i=0;$i<rand(8,15);$i++){
    $pass.=$arr[rand(0,count($arr)-1)];
}

echo $pass;


/*
//Version 1
$pw=array_slice($arr,0,rand(8,15));
$pw=implode("",$pw);
echo $pw;
*/
/*
//Version 2
$pass="";
for($i=0;$i<rand(8,15);$i++){
    $pass.=$arr[$i];
}

echo $pass;
*/




?>
