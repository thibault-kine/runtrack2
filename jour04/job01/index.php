<?php
var_dump($_GET);

$i = 0;
foreach($_GET as $val)
{
    $i++;
}
echo("L'array \$_GET contient ".$i." arguments");
?>

<form action="index.php" method="get">
    <label for="fname">Prénom: </label>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Nom: </label>
    <input type="text" name="lname" id="lname"><br>
    <label for="age">Age: </label>
    <input type="number" name="age" id="age"><br>
    <input type="submit">
</form>