<?php

require_once 'src/helpers.php';
require_once 'shared.php';

$line = readOneLine('03/input.txt');

$houses = array();
$x = 0;
$y = 0;
$houses[makeKey($x, $y)] = true;
$pos1 = [$x, $y];
$pos2 = [$x, $y];
$is_pos_1 = true;
foreach (str_split($line) as $char) {
    if ($is_pos_1){
        $pos1 = move($pos1, $char);
        [$x, $y] = $pos1;
        $houses[makeKey($x, $y)] = true;
    } else {
        $pos2 = move($pos2, $char);
        [$x, $y] = $pos2;
        $houses[makeKey($x, $y)] = true;
    }
    $is_pos_1 = !$is_pos_1;
}



$total = count(array_keys($houses));
echo $total;
