<?php

use PHPUnit\Framework\TestCase;

require_once 'src/02/a.php';

class RemoveMaxTest extends TestCase
{
    /**
     * Tests the removeMax() function with an array of unique numbers.
     */
    public function testRemoveMax(): void
    {
        $input = [1, 3, 2, 5, 4];
        $expectedOutput = [1, 3, 2, 4];

        $result = removeMax($input);

        $this->assertEquals($expectedOutput, $result);
    }

    /**
     * Tests the removeMax() function with an array that includes duplicate numbers.
     */
    public function testRemoveMaxWithDuplicates(): void
    {
        $input = [1, 2, 3, 4, 4, 2];
        $expectedOutput = [1, 2, 3, 4, 2];

        $result = removeMax($input);

        $this->assertEquals($expectedOutput, $result);
    }
    /**
     * Tests the removeMax() function with an empty array. Expects a ValueError exception to be thrown.
     */
    public function testRemoveMaxWithEmptyArray(): void
    {

        $this->expectException(ValueError::class);
        $input = [];
        removeMax($input);
    }
}
