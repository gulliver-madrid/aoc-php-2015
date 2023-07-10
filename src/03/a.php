<?php

require_once 'src/helpers.php';

$line = readOneLine('03/input.txt');

/**
 * Creates a unique key for a house
 */
function makeKey(int $x, int $y): string
{
    return "$x,$y";
}

$houses = array();
$x = 0;
$y = 0;
$houses[makeKey($x, $y)] = true;
foreach (str_split($line) as $char) {
    switch ($char) {
        case 'v':
            $y++;
            break;
        case '^':
            $y--;
            break;
        case '>':
            $x++;
            break;
        case '<':
            $x--;
            break;
    }
    $houses[makeKey($x, $y)] = true;
}

$total = count(array_keys($houses));
echo $total;
