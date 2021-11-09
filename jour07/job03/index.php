<?php
session_start();
$prenoms = array();

if(isset($_GET["prenom"]))
{
    for($i = 0; isset($_GET["prenom"]); $i++)
    {
        for($j = 0; isset($prenoms[$j]); $j++)
        {
            $_GET["prenom"[$i]] = $prenoms[$j];
        }
    }
}

echo("\$_GET[\"prenom\"] :");
var_dump($_GET["prenom"]);
echo("\$prenoms :");
var_dump($prenoms);
?>

<form action="" method="get">
    <label for="prenom">Entrez votre prénom: </label>
    <input type="text" name="prenom"><br>
    <input type="submit" name="submit">
</form>