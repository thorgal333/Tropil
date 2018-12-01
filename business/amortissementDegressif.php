<?php
declare(strict_types=1);
namespace business;

class amortissementDegressif extends amortissement
{
    

    public function __construct($valeur, $nbAnnee)
    {
        parent::__construct($valeur, $nbAnnee);
    } 
    /**
     * Calcul de l'amortissement dégressif sur nbAnnee
     *
     * @return array
     */
    public function CalculAmortissement() : array
    {
        
        
        for ($i=0; $i < $this->nbAnnee; $i++) {
            $taux = 0.2 / ($i+1) ;
            $tabAmortissement[$i] = round($this->valeur * $taux);
        }

        return $tabAmortissement;
        
    }
}