<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../Repetidos.php';

class RepetidosTest extends TestCase
{
    public function testRepetidos()
    {
        $this->assertEquals([2, 4, 6, 8, 10], Repetidos([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 2, 4, 6, 8, 10]));
    }
}
