<?php

class Client
{
    private $id_client;
    private $adresse;
    private $telephone;
    private $email;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->adresse = $adresse; // Initialisation de l'adresse.
        // $this->telephone = $telephone; // Initialisation de telephone.
    }
    public function setId_client($id_client)
    {
       $this->id_client = $id_client;
    }
    public function setadresse($adresse)
    {
       $this->adresse = $adresse;
    }
    public function settelephone($telephone)
    {
       $this->telephone = $telephone;
    }
    public function setemail($email)
    {
       $this->email = $email;
    }
    // getters
   
   
     public function getId_client()
    {
        return $this->id_client;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getEmail()
    {
        return $this->email;

    }
}

    ?>