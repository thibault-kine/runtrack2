<?php
function getlenght($_a)
{
    $i = 0;
    while(isset($_a[$i]))
    {
        $i++;
    }
    return $i;
}

function bubblesort($_tab, $_croissant)
{
    if($_croissant) // si l'ordre est croissant
    {
        $i = 0;
        while(isset($_tab[$i]))
        {
            echo($_tab[$i]." ");
            $i++;
        }
    }

    if(!$_croissant) // si l'ordre est décroissant
    {
        $j = getlenght($_tab)-1; // un peu une technique de clochard mais au moins ça marche :p
        while($j >= 0)
        {
            echo($_tab[$j]." ");
            $j--;
        }
    }
    echo("<br>");
}

$tab = ["aaa", "bbb", "ccc", "ddd"];

bubblesort($tab, true); // devrait afficher "aaa bbb ccc ddd"
bubblesort($tab, false); // devrait afficher "ddd ccc bbb aaa"
?>