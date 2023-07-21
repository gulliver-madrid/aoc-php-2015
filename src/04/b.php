<?php

require_once 'src/helpers.php';

$line = readOneLine('04/input.txt');

$v = 0;
while (true){
    $cadena = $line.$v;
    $md5 = md5($cadena);
    $primeros6 = substr($md5, 0, 6);
    if ($primeros6==="000000"){
        break;
    }
    $v++;
}
echo $v;
