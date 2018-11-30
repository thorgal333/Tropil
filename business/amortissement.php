<?php
declare(strict_types=1);
namespace business;

abstract class amortissement
{
    protected $valeur;
    protected $nbAnnee;

    public function __construct($valeur, $nbAnnee)
    {
        $this->valeur = $valeur;
        $this->nbAnnee = $nbAnnee;
    } 

    public abstract function CalculAmortissement() : array;
}