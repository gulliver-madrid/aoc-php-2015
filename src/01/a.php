<?php

require_once 'src/helpers.php';

$line = readOneLine('01/input.txt');

$c = 0;
foreach (str_split($line) as $char) {
    if ($char == "(")
        $c++;
    elseif ($char == ")")
        $c--;
}

echo $c;
