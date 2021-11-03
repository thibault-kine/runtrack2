<?php
for($x = 2; $x <= 1000; $x++)
{
    $check = true;
    for($y = 2; $y <= $x; $y++)
    {
        if(($x % $y == 0) && ($y != $x))
        {
            $check = false;
        }
    }
    if($check)
    {
        echo $x."<br>";
    }
}
?>