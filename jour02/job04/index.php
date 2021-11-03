<?php
for($var = 1; $var <= 100; $var++)
{
    // si $var est un mutliple de 3 et de 5
    if($var % 3 == 0 && $var % 5 == 0)
    {
        echo "FizzBuzz";
    }
    // sinon si $var est un mutliple de 3
    else if($var % 3 == 0)
    {
        echo "Fizz";
    }
    // sinon si $var est un mutliple de 5
    else if($var % 5 == 0)
    {
        echo "Buzz";
    }
    // si aucune des conditions n'est remplie...
    else
    {
        echo $var;
    }

    echo "</br>";
}
?>