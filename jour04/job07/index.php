<body style="text-align: center;">
<form action="index.php" method="get">
    <label for="width">Largeur: </label>
    <input type="number" name="width"><br>
    <label for="height">Hauteur: </label>
    <input type="number" name="height"><br>
    <input type="submit">
</form>

<?php

for($larg = 0; $larg <= $_GET["width"]; $larg++)
{
    echo("_");
}
?>

</body>