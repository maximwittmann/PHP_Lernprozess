<style>
*{font-family:"Comic Sans MS",Arial,sans-serif;font-size:1.5em;}
</style>
<?php
$t=rand(1,35);
$m=rand(1,15);
$j=rand(1900,2200);
if(!checkdate($m,$t,$j))
  echo "<div style=color:red>";
else
  echo "<div style=color:green>";

echo "Der $t.$m.$j ist ";
if(!checkdate($m,$t,$j)){
    echo "k";
}
echo "ein gültiges Datum.</div>";
?>