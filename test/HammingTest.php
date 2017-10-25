<?php

require "Hamming.php";

class HammingTest extends PHPUnit\Framework\TestCase
{

    public function testSinDiferenciaConCadenasIdenticas()
    {
        $this->assertEquals(0, distancia('A', 'A'));
    }

    public function testiConUnSoloCaracter()
    {
        $this->assertEquals(1, distancia('A', 'G'));
    }

    public function testConCadenasCortas()
    {
        $this->assertEquals(2, distancia('AG', 'CT'));
    }

    public function testConCadenasLargas()
    {
        $this->assertEquals(1, distancia('GGACG', 'GGTCG'));
    }

    public function testConCadenasMasLargas()
    {
        $this->assertEquals(4, distancia('GATACA', 'GCATAA'));
    }

    public function testConCadenasMuchoMasLargas()
    {
        $this->assertEquals(9, distancia('GGACGGATTCTG', 'AGGACGGATTCT'));
    }

    public function testLanzaExcepcionConLongitudesDiferentes()
    {
        $this->markTestSkipped();
        $this->expectException('InvalidArgumentException', 'Las cadenas deben tener la misma longitud.');
        distancia('GGACG', 'AGGACGTGG');
    }
}
