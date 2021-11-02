<?php
// déclaration des variables
$dessertFavori = "Tiramisu";
$leSoleilEstChaud = true;
$monAge = 19;
$pi = 3.14159265359;
$derniereLettre = 'z';

// génération du code HTML
echo "
<table>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>Chaîne de charactères</td>
        <td>dessertFavori</td>
        <td>$dessertFavori</td>
    </tr>
    <tr>
        <td>Booléen</td>
        <td>leSoleilEstChaud</td>
        <td>$leSoleilEstChaud</td>
    </tr>
    <tr>
        <td>Nombre entier</td>
        <td>monAge</td>
        <td>$monAge</td>
    </tr>
    <tr>
        <td>Nombre décimal</td>
        <td>pi</td>
        <td>$pi</td>
    </tr>
    <tr>
        <td>Charactère</td>
        <td>derniereLettre</td>
        <td>$derniereLettre</td>
    </tr>
</table>
"
?>