<?php

    class client_salarie  extends client
{
    private $prenom;
    private $profession;
    private $nom_entreprise;
    private $adresse_entreprise;
    private $nom;
    private $cni;

    function __construct() // Constructeur demandant 3 paramètres
    {
        parent::__construct();  
    }

    public function setPrenom($prenom)
    {
       $this->prenom = $prenom;
    }
    public function setProfession($profession)
    {
       $this->profession = $profession;
    }
    public function setNom_entreprise($nom_entreprise)
    {
       $this->nom_entreprise = $nom_entreprise;
    }
    public function getAdresse_entreprise($adresse_entreprise)
    {
        return $this->adresse_entreprise;
    }
    public function getNom($nom)
    {
        return $this->nom;
    }
    public function getCni($cni)
    {
        return $this->cni;
    }
}
