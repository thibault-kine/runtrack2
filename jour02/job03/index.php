<?php
for($var = 0; $var <= 100; $var++)
{
    // si $var est entre 0 et 20, mettre en italique
    if($var > 0 && $var < 20)
    {
        echo "<i>".$var."</i>";
    }
    // sinon si $var est entre 25 et 50 et N'EST PAS 42, souligner...
    else if($var > 25 && $var < 50 && $var != 42)
    {
        echo "<u>".$var."</u>";
        
    }
    // ... et si $var vaut 42, afficher "La Plateforme_"
    else if($var == 42)
    {
        echo "La Plateforme_";
    }
    // si aucune de ces conditions n'est remplie...
    else
    {
        echo $var;
    }

    echo "</br>";
}
?>