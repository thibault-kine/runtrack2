<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT SUM(`superficie`) FROM `etage`";
$result = mysqli_query($connexion, $query);
$superficie_totale = mysqli_fetch_all($result);
?>

<table>
    <tr>
        <th>Superficie Totale</th>
    </tr>
    <tr>
        <td><?php echo $superficie_totale[0][0] ?></d>
    </tr>
</table>