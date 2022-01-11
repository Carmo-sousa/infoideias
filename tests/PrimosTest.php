<?php

require __DIR__ . '/../Primos.php';

use PHPUnit\Framework\TestCase;

class PrimosTest extends TestCase
{
    public function testPrimosOnzeAVinteENove()
    {
        $this->assertEquals([11, 13, 17, 19, 23], Primos(10, 29));
    }

    public function testNaoPrimos()
    {
        $this->assertEquals([], Primos(1, 1));
    }
}
