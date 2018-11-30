<?php
declare(strict_types=1);
namespace business;
include_once __DIR__ .'/donnee.php';


class Prestataire
{
    private $nom;
    private $prenom;
    private $nhHeure;
    private $tarif;

    public function __construct($nom, $prenom, $nbHeure, $tarif)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nbHeure = $nbHeure;
        $this->tarif = $tarif;
    }
    /**
     * CalculCout calcule le coût d'un prestataire avec la TVA.
     *
     * @return float
     */
    public function CalculCout() : float
    {
        $cout = $this->nbHeure * $this->tarif;
        if ($cout > 2000)
        {
            $cout *= TVA1;
        }
        else
        {
            $cout *= TVA0;
        }
        return $cout;
    }

    public function getNom() : string
    {
        return $this->nom;
    }

    public function getPrenom() : string
    {
        return $this->prenom;
    }


}