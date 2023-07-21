<?php

require_once 'src/helpers.php';

$line = readOneLine('04/input.txt');

$v = 0;
while (true){
    $cadena = $line.$v;
    $md5 = md5($cadena);
    $primeros5 = substr($md5, 0, 5);
    if ($primeros5==="00000"){
        break;
    }
    $v++;
}
echo $v;
