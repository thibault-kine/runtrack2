<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT * FROM `salles` ORDER BY `capacite` DESC";
$result = mysqli_query($connexion, $query);
$salles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>ID Etage</th>
        <th>Capacité</th>
    </tr>
    <?php
    foreach($salles as $salle)
    {
        echo("<tr>");
        echo("<td>".$salle["id"]."</td>");
        echo("<td>".$salle["nom"]."</td>");
        echo("<td>".$salle["id_etage"]."</td>");
        echo("<td>".$salle["capacite"]."</td>");
        echo("</tr>");
    }
    ?>
</table>