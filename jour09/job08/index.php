<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT SUM(`capacite`) FROM `salles`";
$result = mysqli_query($connexion, $query);
$capacite_totale = mysqli_fetch_all($result);
?>

<table>
    <tr>
        <th>Capacité Totale</th>
    </tr>
    <tr>
        <td><?php echo $capacite_totale[0][0] ?></td>
    </tr>
</table>