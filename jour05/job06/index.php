<?php
function leetspeak($str)
{
    $letters = [
        "A", "a",
        "B", "b",
        "E", "e",
        "G", "g",
        "L", "l",
        "S", "s",
        "T", "t",
        "O", "o"
    ];

    $leet = [
        4, 4,
        8, 8,
        3, 3,
        6, 6,
        1, 1,
        5, 5,
        7, 7,
        0, 0
    ];

    for($i = 0; isset($str[$i]); $i++)
    {
        for($j = 0; isset($leet[$j]); $j++)
        {
            if($str[$i] == $letters[$j])
            {
                $str[$i] = $leet[$j];
            }
        }
        
    }
    return $str;
}

echo(leetspeak("Je suis un hackeur!!"));
?>