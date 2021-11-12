<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT COUNT(*) FROM `etudiants`";
$result = mysqli_query($connexion, $query);
$nb_etudiants = mysqli_fetch_all($result);
?>

<table>
    <tr>
        <th>Nb d'étudiants</th>
    </tr>
    <tr>
        <td><?php echo $nb_etudiants[0][0] ?></td>
    </tr>
</table>