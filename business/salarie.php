<?php
declare(strict_types=1);
namespace business;
include_once __DIR__ .'/donnee.php';

class salarie
{
    private $nom;
    private $prenom;
    private $salaire;

    public function __construct($nom, $prenom, $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->salaire=$salaire;
    }
    /**
     * CalculRetraite calcule la cotisation retraite d'un salarié
     *
     * @return float
     */
    public function calculRetraite() : float
    {
       return $this->salaire * donneeSalaire::retraite;
    }
   /**
    * CalculCSG calcule la CSG d'un salarié
    *
    * @return float
    */
    public function  CalculCSG(): float
    {
        return $this->salaire * donneeSalaire::CSG;
    }

    /**
    * CalculCSG calcule la cotisation santé d'un salarié
    *
    * @return float
    */
    public function  CalculSante(): float
    {
        return $this->salaire * donneeSalaire::sante;
    }

    /**
    * CalculMutuelle calcule la cotisation à la mutuelle d'un salarié
    *
    * @return float
    */
    public function  CalculMutuelle(): float
    {
        if ($this->salaire > 2000)
        {
            return 150;
        }
        else if ($this->salaire > 1000)
        {
            return 100;
        }
        else
        {
            return 0;
        }
    }

     /**
    * CalculSalaireNet calcule le salaire net d'un salarié
    *
    * @return float
    */
    public function  CalculSalaireNet(): float
    {
        $salaireNet = $this->salaire - $this->calculRetraite() - $this->CalculCSG() - $this->CalculMutuelle() - $this->CalculSante();
        return $salaireNet;
    }
    public function getNom() : string
    {
        return $this->nom;
    }

    public function getPrenom() : string
    {
        return $this->prenom;
    }

    public function getSalaire() : float
    {
        return (float)$this->salaire;
    }


}