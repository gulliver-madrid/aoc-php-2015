<?php

require_once 'src/helpers.php';
require_once 'shared.php';

$path = 'data/02/input.txt';
$lines = readLines($path);

$paper = 0;
foreach ($lines as $line_num => $line) {
    $measures = parseMeasures(trim($line));
    [$a, $b, $c] = $measures;
    $smallest = removeMax($measures);
    [$e, $f] = $smallest;
    $needed = 2 * ($a * $b) + 2 * ($a * $c) + 2 * ($b * $c) + $e * $f;
    $paper += $needed;
}
echo $paper;
