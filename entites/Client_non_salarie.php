<?php

    class client_non_salarie 
{
    private $id_client;
    private $nom;
    private $prenom;
    private $activite;
    private $cni;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // parent::__construct();  
    }
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }
    public function setNom($nom)
    {
       $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
       $this->prenom = $prenom;
    }
    public function setActivite($activite)
    {
       $this->activite = $activite;
    }
   
       public function setCni($cni)
    {
         $this->cni = $cni;
    
    }
    // getters
    public function getId_client()
    {
        return $this->id_client;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getActivite()
    {
        return $this->activite;
    }
    
    public function getCni()
    {
        return $this->cni;
    }
}
    ?>