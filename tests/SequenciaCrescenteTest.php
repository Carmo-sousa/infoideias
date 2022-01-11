<?php

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../SequenciaCrescente.php';

class SequenciaCrescenteTest extends TestCase
{
    public function testSequenciaValida()
    {
        $this->assertTrue(SequenciaCrescente(array(10, 1, 2, 3, 4, 5)));
    }

    public function testSequenciaInvalida()
    {
        $this->assertFalse(SequenciaCrescente(array(1, 3, 2, 1)));
    }
}
