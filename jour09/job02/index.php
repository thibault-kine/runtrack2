<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT `nom`, `capacite` FROM `salles`";
$result = mysqli_query($connexion, $query);
$salles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
    </tr>
    <?php
    foreach($salles as $salle)
    {
        echo("<tr>");
        echo("<td>".$salle["nom"]."</td>");
        echo("<td>".$salle["capacite"]."</td>");
        echo("</tr>");
    }
    ?>
</table>