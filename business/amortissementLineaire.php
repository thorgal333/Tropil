<?php
declare(strict_types=1);
namespace business;

class amortissementLineaire extends amortissement
{
    

    public function __construct($valeur, $nbAnnee)
    {
        parent::__construct($valeur, $nbAnnee);
    } 
    /**
     * Calcul de l'amortissement linéairé sur nbAnnee
     *
     * @return array
     */
    public function CalculAmortissement() : array
    {
        for ($i=0; $i < $this->nbAnnee; $i++) { 
            $tabAmortissement[$i] = $this->valeur / $this->nbAnnee;
        }

        return $tabAmortissement;
        
    }
}