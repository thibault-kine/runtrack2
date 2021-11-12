<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = "SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `sexe`=\"Femme\"";
$result = mysqli_query($connexion, $query);
$etudiants = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th
    </tr>
    <?php
    foreach($etudiants as $etudiant)
    {
        echo("<tr>");
        echo("<td>".$etudiant["prenom"]."</td>");
        echo("<td>".$etudiant["nom"]."</td>");
        echo("<td>".$etudiant["naissance"]."</td>");
        echo("</tr>");
    }
    ?>
</table>