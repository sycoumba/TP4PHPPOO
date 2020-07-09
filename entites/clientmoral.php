<?php

class client_moral extends client
{
   private $type_entreprise;
   private $activite_entreprise;
   private $nom_entreprise;
   private $raison_social;
   private $identifiant_entreprise;
   private $adresse_entreprise;

    function __construct() // Constructeur demandant 3 paramètres
    {
        parent::__construct();  
        
    }

    public function setType_entreprise($type_entreprise)
    {
        $this->type_entreprise = $type_entreprise;
    }
    public function setActivite_entreprise($activite_entreprise)
    {
        $this->activite_entreprise = $activite_entreprise;
    }
    public function setNom_entreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }
    public function setRaison_social($raison_social)
    {
        $this->raison_social = $raison_social;
    }

    public function setIdentifiant_entreprise($identifiant_entreprise)
    {
        $this->identifiant_entreprise = $identifiant_entreprise;
    }
    public function setAdresse_entreprise($adresse_entreprise)
    {
        $this->adresse_entreprise = $adresse_entreprise;
    }
    public function getType_entreprise()
    {
        return $this->type_entreprise;
    }
    public function getActivite_entreprise()
    {
        return $this->activite_entreprise;
    }
    public function getNom_entreprise()
    {
        return $this->nom_entreprise;
    }
    public function getRaison_social()
    {
        return $this->raison_social;
    }
    public function getIdentifiant_entreprise()
    {
        return $this->identifiant_entreprise;
    }
    public function getAdresse_entreprise()
    {
        return $this->adresse_entreprise;
    }
}
?>