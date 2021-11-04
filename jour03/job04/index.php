<?php
$str = "Dans l'espace, personne ne vous entend crier";

$i = 1;
while(isset($str[$i]))
{
    $i++;
}

echo("Il y a ".$i." caractères dans la phrase : ".$str);

?>