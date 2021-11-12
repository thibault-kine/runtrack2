<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT AVG(`capacite`) FROM `salles`";
$result = mysqli_query($connexion, $query);
$capacite_moyenne = mysqli_fetch_all($result);
?>

<table>
    <tr>
        <th>Capacité moyenne</th>
    </tr>
    <tr>
        <td><?php echo $capacite_moyenne[0][0] ?></td>
    </tr>
</table>