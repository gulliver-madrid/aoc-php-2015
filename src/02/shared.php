<?php

/**
 * Removes the maximum value from an array of integers and returns the resulting array.
 *
 * @param int[] $values An array of integers.
 * @return int[] The modified array without the maximum value.
 */
function removeMax($values)
{
    $maxValue = max($values);
    $key = array_search($maxValue, $values);
    assert($key !== false);
    unset($values[$key]);
    $smallest = array_values($values);
    return $smallest;
}

/**
 * Parses a string representing the dimensions of a cube in the format "length x width x height"
 * and returns an array of integers representing the parsed dimensions.
 *
 * @param string $str A string in the format "length x width x height".
 * @return int[] An array containing the parsed dimensions: [length, width, height].
 */
function parseMeasures($str)
{
    $measures_as_strings = explode('x', $str);
    return array_map('intval', $measures_as_strings);
}
