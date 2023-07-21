<?php

/**
 * Creates a unique key for a house
 */
function makeKey(int $x, int $y): string
{
    return "$x,$y";
}

/**
 * @param array<int> $pos
 * @return array<int>
 */
function move(array $pos, string $char): array {
    [$x, $y] = $pos;
    switch ($char) {
        case 'v':
            $y++;
            break;
        case '^':
            $y--;
            break;
        case '>':
            $x++;
            break;
        case '<':
            $x--;
            break;
    }
    return [$x, $y];
}
