<?php
$file = fopen('./data/01/input.txt', 'r');
$line = fgets($file);
fclose($file);

$c = 0;
foreach (str_split($line) as $char) {
    if ($char == "(")
        $c++;
    elseif ($char == ")")
        $c--;
}

echo $c;
