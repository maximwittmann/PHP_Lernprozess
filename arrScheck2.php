<pre>
<?php
$text1="Null,Ein,Zwei,Drei,Vier,Fünf,Sechs,Sieben,Acht,Neun,"
      ."Zehn,Elf,Zwölf,Dreizehn,Vierzehn,Fünfzehn,Sechzehn,Siebzehn,Achtzehn,Neunzehn";
$text2="x,Zehn,zwanzig,dreißig,vierzig,fünfzig,sechzig,siebzig,achtzig,neunzig";

$klein=explode(",",$text1);
$zehner=explode(",",$text2);

$zahl=rand(100,999);

echo "$zahl<br>***";
if($zahl<20){
   echo $klein[$zahl];
}
elseif ($zahl<100){
    $z=str_split($zahl);
    if($z[1]==0){
        $zehn=$zehner[$z[0]];
        echo $zehn;
    }
    else {
        $einer=$klein[$z[1]]."und";
        $zehn=$zehner[$z[0]];
        echo $einer.$zehn;
    }
}
elseif ($zahl<1000){
    $z=str_split($zahl);
    echo $klein[$z[0]]."hundert";
}

echo "***";

?>
</pre>

