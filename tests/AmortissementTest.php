<?php
declare(strict_types=1);

 include __DIR__ . "/../business/amortissement.php";
 include __DIR__ . "/../business/amortissementLineaire.php";
 include __DIR__ . "/../business/amortissementDegressif.php";
use PHPUnit\Framework\TestCase;

final class AmortissementTest extends TestCase
{
    public function testAmortissementLineaire() 
    {
        $tabExpected = array(1000,1000,1000,1000, 1000);
        $amortissement = new business\amortissementLineaire(5000, 5);      
        $this->assertEquals($tabExpected, $amortissement->CalculAmortissement());
    }

    public function testAmortissementDegressif() 
    {
        $tabExpected = array(800,800,800,800,800);
        $amortissement = new business\amortissementDegressif(5000, 5);      
        $this->assertEquals($tabExpected, $amortissement->CalculAmortissement());
    }
   
}
