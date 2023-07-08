<?php
$file = fopen('./data/01/input.txt', 'r');
$line = fgets($file);
fclose($file);

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
