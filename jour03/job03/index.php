<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['A', 'a', 'E', 'e', 'I', 'i','O', 'o','U', 'u'];

$i = 0;
while(isset($str[$i]))
{
    $j = 0;
    while(isset($voyelles[$j]))
    {
        if($str[$i] == $voyelles[$j])
        {
            echo($str[$i]);
        }
        $j++;
    }
    $i++;
}
?>