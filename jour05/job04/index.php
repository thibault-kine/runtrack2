<?php
function calcule(int $a, string $operation, int $b)
{
    switch($operation)
    {
        case "+":
            return $a + $b;
            break;
        
        case "-":
            return $a - $b;
            break;
        
        case "*":
            return $a * $b;
            break;

        case "/":
            return $a / $b;
            break;

        case "%":
            return $a % $b;
            break;
        
        default:
            return 0;
    }
}
?>