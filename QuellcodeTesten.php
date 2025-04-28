<html><head><title></title></head>
<body>
<table border>
    <?php
    for($a=1;$a<=10;$a++){
          echo "<tr align=\"right\">";
          for($b=1;$b<=10;$b++){
              echo "<td>$b x $a = ".($b*$a)."</td>\n";
              }
          echo "</tr>";
    }
    ?>
</table>
</body>
</html>