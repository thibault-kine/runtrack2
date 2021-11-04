<?php
$str = "Les choses que l'on possede finissent par nous posseder.";

$i = -1;
while(isset($str[$i]))
{
    echo($str[$i]);
    $i--;
}
?>