<?php

require __DIR__ . '/../SeculoAno.php';

use PHPUnit\Framework\TestCase;


class SeculoAnoTest extends TestCase
{
    public function testSeculoVinte()
    {
        $this->assertEquals(20, SeculoAno(2000));
    }

    public function testSeculoVinteUm()
    {
        $this->assertEquals(21, SeculoAno(2001));
    }

    public function testSeculoUm() {
        $this->assertEquals(1, SeculoAno(1));
    }
}
