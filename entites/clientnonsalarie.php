<?php

    class client_non_salarie  extends client
{
    private $prenom;
    private $activite_client;
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
    public function setActivite_client($activite_client)
    {
       $this->activite_client = $activite_client;
    }
    public function setNom($nom)
    {
       $this->nom = $nom;
    }
       public function setCni()
    {
        return $this->cni;
    
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getActivite_client()
    {
        return $this->activite_client;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getCni()
    {
        return $this->cni;
    }
}
    ?>