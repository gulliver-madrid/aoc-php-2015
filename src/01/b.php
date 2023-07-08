<?php

require_once 'src/helpers.php';

$line = readOneLine('01/input.txt');

$c = 0;
$pos = 0;
foreach (str_split($line) as $char) {
    $pos++;
    if ($char == "(")
        $c++;
    elseif ($char == ")")
        $c--;
    if ($c == -1) {
        echo $pos;
        break;
    }
}
