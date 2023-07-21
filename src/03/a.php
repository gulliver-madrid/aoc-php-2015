<?php

require_once 'src/helpers.php';
require_once 'shared.php';

$line = readOneLine('03/input.txt');

$houses = array();
$x = 0;
$y = 0;
$houses[makeKey($x, $y)] = true;
foreach (str_split($line) as $char) {
    [$x, $y] = move([$x, $y], $char);
    $houses[makeKey($x, $y)] = true;
}

$total = count(array_keys($houses));
echo $total;
