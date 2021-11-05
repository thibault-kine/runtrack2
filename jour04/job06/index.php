<?php
if($_GET["nb"] % 2 == 0)
{
    echo("C'est un nombre pair");
}
else
{
    echo("C'est un nombre impair");
}
?>

<form action="index.php" method="get">
    <label for="nb">Entrez un nombre: </label>
    <input type="number" name="nb" id="nb"><br>
    <input type="submit">
</form>