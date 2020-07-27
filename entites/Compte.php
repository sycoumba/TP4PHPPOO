<?php

class Compte
{
    protected $numero_compte;
    protected $cle_rib;
    protected $solde_compte;
    protected $numero_agence;
    protected $date_ouverture;
    protected $id_client;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->adresse = $adresse; // Initialisation de l'adresse.
        // $this->telephone = $telephone; // Initialisation de telephone.
    }
   
    public function setnumero_compte($numero_compte)
    {
       $this->numero_compte = $numero_compte;
    }
    public function setcle_rib($cle_rib)
    {
       $this->cle_rib = $cle_rib;
    }
    public function setsolde_compte($solde_compte)
    {
       $this->solde_compte = $solde_compte;
    }
    public function setnumero_agence($numero_agence)
    {
       $this->numero_agence = $numero_agence;
    }
    public function setdate_ouverture($date_ouverture)
    {
       $this->date_ouverture = $date_ouverture;
    }
    public function setId_client($id_client)
    {
       $this->id_client = $id_client;
    }
    // getters
    public function getNumero_compte()
    {
        return $this->numero_compte;
    }
    public function getCle_rib()
    {
        return $this->cle_rib;
    }
    public function getSolde()
    {
        return $this->solde_compte;

    }
    public function getNumero_agence()
    {
        return $this->numero_agence;

    }
    public function getDateOuverture()
    {
        return $this->date_ouverture;

    }
    public function getId_client()
    {
        return $this->id_client;

    }




}


    //numero_compte`, `cle_rib`, `solde_compte`, `numero_agence`, `date_ouverture`, `id_responsable`, 
//`id_client` FROM `comptes` WHERE 1
?>
