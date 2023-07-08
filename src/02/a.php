<?php

require_once 'shared.php';

$lines = file('data/02/input.txt');
if ($lines === false) {
    throw new Exception("No se pudo leer el contenido del archivo");
}

$paper = 0;
foreach ($lines as $line_num => $line) {
    $measures = explode('x', trim($line));
    [$a, $b, $c] = $measures;
    $smallest = removeMax($measures);
    [$e, $f] = $smallest;
    $needed = 2 * ($a * $b) + 2 * ($a * $c) + 2 * ($b * $c) + $e * $f;
    $paper += $needed;
}
echo $paper;

/**
 * Removes the maximum value from an array of integers and returns the resulting array.
 *
 * @param int[] $values An array of integers.
 * @return int[] The modified array without the maximum value.
 */
function removeMax($values)
{
    $maxValue = max($values);
    $key = array_search($maxValue, $values);
    assert($key !== false);
    unset($values[$key]);
    $smallest = array_values($values);
    return $smallest;
}
