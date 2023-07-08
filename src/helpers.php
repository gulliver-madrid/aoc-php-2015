<?php

/**
 * Reads a single line from a file and returns the content as a string.
 *
 * @param string $path The path to the file.
 * @return string The content of the single line.
 * @throws Exception If the file cannot be opened or the line cannot be read.
 */
function readOneLine(string $path): string
{
    $file = fopen('./data/' . $path, 'r');
    if ($file === false) {
        throw new Exception("No se pudo abrir el archivo: $path");
    }
    $line = fgets($file);
    if ($line === false) {
        throw new Exception("No se pudo leer la línea del archivo: $path");
    }
    fclose($file);
    return $line;
}
