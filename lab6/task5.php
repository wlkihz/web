<?php
declare(strict_types=1);

$num = (int)$_GET['num'];
echo(Factorial($num));

function Factorial(int $num): int
{
    if ($num <= 1){ 
        return 1;
    }
    return $num * Factorial($num - 1);
}