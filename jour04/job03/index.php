<?php
$i = 0;
foreach($_POST as $val)
{
    $i++;
}
echo("L'array \$_POST contient ".$i." arguments");
?>

<form action="index.php" method="post">
    <label for="fname">Prénom: </label>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Nom: </label>
    <input type="text" name="lname" id="lname"><br>
    <label for="age">Age: </label>
    <input type="number" name="age" id="age"><br>
    <input type="submit">
</form>