<form action="" method="get">
 Ihr Zahl: <input type="number" name="z"
        required min="1" step=".01"><input type="submit">
</form>

<?php
 if(isset($_GET['z'])){
    $zahl = $_GET["z"];
    $q = $zahl * $zahl;
    echo "Das Quadrat von $zahl ist $q";
}
?>
