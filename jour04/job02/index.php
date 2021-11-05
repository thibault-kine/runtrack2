<?php
$keys = array();
$values = array();

$i = 0;
foreach($_GET as $k => $v)
{
    $keys[$i] = $k;
    $values[$i] = $v;
    $i++;
}
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

<table>
    <tr>
        <th>Index</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td><?php echo($keys[0]) ?></td>
        <td><?php echo($values[0]) ?></td>
    </tr>
    <tr>
        <td><?php echo($keys[1]) ?></td>
        <td><?php echo($values[1]) ?></td>
    </tr>
    <tr>
        <td><?php echo($keys[2]) ?></td>
        <td><?php echo($values[2]) ?></td>
    </tr>
</table>