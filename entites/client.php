<?php

class client
{
    protected $adresse;
    protected $telephone;
    protected $email;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->adresse = $adresse; // Initialisation de l'adresse.
        // $this->telephone = $telephone; // Initialisation de telephone.
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