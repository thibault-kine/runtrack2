<?php
for($var = 1; $var < 1337; $var++)
{
    if($var == 42)
    {
        // souligne et met en gras $var lorsque sa valeur atteint 42
        echo "<b><u>".$var."</b></u>"."</br>";
    }
    else
    {
        // sinon, affiche la valeur de $var normalement
        echo $var."</br>";
    }
}
?>