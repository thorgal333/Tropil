<?php
declare(strict_types=1);
require __DIR__ . "/../business/prestataire.php";

use PHPUnit\Framework\TestCase;

final class PrestataireTest extends TestCase
{
    public function testNom() 
    {
        $presta = new business\prestataire("durant", "jean", 45, 55);      
        $this->assertEquals("durant", $presta->getNom());
    }

    public function testPrenom() 
    {
        $presta = new business\prestataire("durant", "jean", 45, 55);
        $this->assertEquals("jean", $presta->getPrenom());
    }
    public function testCoutSuperieur2000() 
    {
        $presta = new business\prestataire("durant", "jean", 40, 60);
        $this->assertEquals(2760, $presta->CalculCout());
    }

    public function testCoutInferieur2000() 
    {
        $presta = new business\prestataire("durant", "jean", 4, 60);
      
        $this->assertEquals(252, $presta->calculCout());
    }
}
