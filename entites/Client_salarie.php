<?php

    class client_salarie 
{
    private $prenom;
    private $profession;
    private $nom_entreprise;
    private $adresse_entreprise;
    private $nom;
    private $cni;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // parent::__construct();  
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
    public function setAdresse_entreprise($adresse_entreprise)
    {
       $this->adresse_entreprise = $adresse_entreprise;
    }
    public function setNom($nom)
    {
       $this->nom = $nom;
    }
    public function setCni($cni)
    {
       $this->cni = $cni;
    }
    // getters
    public function getPrenom($prenom)
    {
        return $this->prenom;
    }
    public function getProfessioin($profession)
    {
        return $this->profession;
    }
    public function getAdresse_entreprise($adresse_entreprise)
    {
        return $this->adresse_entreprise;
    }
    public function getNom_entreprise($nom_entreprise)
    {
        return $this->nom_entreprise;
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
