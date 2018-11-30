<?php
declare(strict_types=1);
require __DIR__ . "/../business/salarie.php";

use PHPUnit\Framework\TestCase;

final class PrestataireTest extends TestCase
{
    public function testNom() 
    {
        $presta = new business\salarie("durant", "jean", 2000);      
        $this->assertEquals("durant", $presta->getNom());
    }

    public function testPrenom() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals("jean",$presta->getPrenom());
    }

    public function testSalaire() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals(2000, $presta->getSalaire());
    }
    public function testCalculSante() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals(260, $presta->CalculSante());
    }

    public function testCalculCSG() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals(120,$presta->CalculCSG());
    }

    public function testRetraite() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals(80,$presta->CalculRetraite());
    }
    public function testMutuelle() 
    {
        $presta = new business\salarie("durant", "jean", 3000);
        $this->assertEquals(150, $presta->CalculMutuelle());
    }
    public function testSalaireNet() 
    {
        $presta = new business\salarie("durant", "jean", 2000);
        $this->assertEquals(1440,$presta->CalculSalaireNet());
    }
}
