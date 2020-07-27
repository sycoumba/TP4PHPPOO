<?php

class compte_courant
{
    private $id_compte;
    private $agios;
   
    function __construct() // Constructeur demandant 1 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->agios = $agios; // Initialisation de agios.
    
    }
//    setters
public function setId_compte($id_compte)
    {
       $this->id_compte = $id_compte;
    }
    public function setAgios($agios)
    {
       $this->agios = $agios;
    }
    
    // getters
    public function getId_compte()
    {
        return $this->id_compte;
    }
    public function getAgios()
    {
        return $this->agios;
    }

}


    //numero_compte`, `cle_rib`, `solde_compte`, `numero_agence`, `date_ouverture`, `id_responsable`, 
//`id_client` FROM `comptes` WHERE 1
