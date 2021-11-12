<?php
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$query = 
"SELECT * FROM `etudiants`
WHERE DATEDIFF(CURRENT_DATE, `naissance`) < 365*18";
$result = mysqli_query($connexion, $query);
$etudiants = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>Email</th>
    </tr>
    <?php
    foreach($etudiants as $etudiant)
    {
        echo("<tr>");
        echo("<td>".$etudiant["id"]."</td>");
        echo("<td>".$etudiant["prenom"]."</td>");
        echo("<td>".$etudiant["nom"]."</td>");
        echo("<td>".$etudiant["naissance"]."</td>");
        echo("<td>".$etudiant["sexe"]."</td>");
        echo("<td>".$etudiant["email"]."</td>");
        echo("</tr>");
    }
    ?>
</table>