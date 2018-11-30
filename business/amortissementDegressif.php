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
        $taux = (1 / $this->nbAnnee ) * 0.8;
        
        for ($i=0; $i < $this->nbAnnee; $i++) {
            $tabAmortissement[$i] = round($this->valeur * $taux);
        }

        return $tabAmortissement;
        
    }
}