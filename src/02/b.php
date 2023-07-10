<?php

require_once 'shared.php';

$lines = file('data/02/input.txt');
if ($lines === false) {
    throw new Exception("No se pudo leer el contenido del archivo");
}

$paper = 0;
foreach ($lines as $line_num => $line) {
    $measures = parseMeasures(trim($line));
    [$a, $b, $c] = $measures;
    $smallest = removeMax($measures);
    [$e, $f] = $smallest;
    $needed = 2 * $e + 2 * $f + $a * $b * $c;
    $paper += $needed;
}
echo $paper;
