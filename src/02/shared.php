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
