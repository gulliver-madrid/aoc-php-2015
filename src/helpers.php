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

/**
 * Reads all lines from a file and returns the content as an array of strings.
 *
 * @param string $path The path to the file.
 * @return string[] An array containing the lines of the file.
 * @throws Exception If the content of the file cannot be read.
 */
function readLines($path)
{
    $lines = file($path);

    if ($lines === false) {
        throw new Exception("No se pudo leer el contenido del archivo: $path");
    }
    return $lines;
}

/**
 * Asserts that an array has a specific count.
 *
 * @param array<mixed> $array The array to assert the count on.
 * @param int $expectedCount The expected count of elements in the array.
 * @return void
 * @throws AssertionError If the array count is not equal to the expected count.
 */
function assertCount(array $array, int $expectedCount): void
{
    $actualCount = count($array);
    assert($actualCount === $expectedCount, "Array count mismatch. Expected: $expectedCount, Actual: $actualCount");
}
