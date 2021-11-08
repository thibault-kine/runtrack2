<?php

function occurrences($str, $char)
{
    $count = 0;
    for($i = 0; isset($str[$i]); $i++)
    {
        if($str[$i] == $char)
        {
            $count++;
        }
    }
    
    if($count > 0)
    {
        return $count;
    }
    else
    {
        return 0;
    }
}

$result = occurrences("Bonjour", "o");
echo $result;
?>