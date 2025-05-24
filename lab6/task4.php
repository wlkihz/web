<?php
declare(strict_types=1);

$start = (int)$_GET['start'];
$end = (int)$_GET['end'];

for ($i = (int)$start; $i <= (int)$end; $i++)
  if (SummDig($i % 1000) == SummDig((int)($i / 1000)))
    echo($i . "\n");

function SummDig(int $num): int
{
  $Sum = 0;
  while($num != 0){
    $Sum += $num % 10;
    $num = (int)($num / 10);
  }
  return $Sum;
}