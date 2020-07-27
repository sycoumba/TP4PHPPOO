<?php

class compte_epargne
{
    private $id_compte;
    private $frais_ouverture;
    private $montant_remuneration;
  

    public function __construct() // Constructeur demandant 3 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->adresse = $adresse; // Initialisation de l'adresse.
        // $this->telephone = $telephone; // Initialisation de telephone.
    }
   
    // public function setnumero_compte($numero_compte)
    // {
    //    $this->numero_compte = $numero_compte;
    // }
    // public function setcle_rib($cle_rib)
    // {
    //    $this->cle_rib = $cle_rib;
    // }
    // public function setsolde_compte($solde_compte)
    // {
    //    $this->solde_compte = $solde_compte;
    // }
    // public function setnumero_agence($numero_agence)
    // {
    //    $this->numero_agence = $numero_agence;
    // }
    public function setId_compte($id_compte)
    {
       $this->id_compte = $id_compte;
    }
    public function setFrais_ouverture($frais_ouverture)
    {
       $this->frais_ouverture = $frais_ouverture;
    }
    public function setMontant_remuneration($montant_remuneration)
    {
       $this->montant_remuneration = $montant_remuneration;
    }
    
// getters
    public function getId_compte()
    {
        return $this->id_compte;
    }
    public function getFrais_ouverture()
    {
        return $this->frais_ouverture;
    }
    public function getMontant_remuneration()
    {
        return $this->montant_remuneration;
    }
    // public function getcle_rib()
    // {
    //     return $this->cle_rib;
    // }
    // public function getsolde_compte()
    // {
    //     return $this->solde_compte;

    // }
    // public function getnumero_agence()
    // {
    //     return $this->numero_agence;

    // }
    // public function getdate_ouverture()
    // {
    //     return $this->date_ouverture;

    // }




}


    //numero_compte`, `cle_rib`, `solde_compte`, `numero_agence`, `date_ouverture`, `id_responsable`, 
//`id_client` FROM `comptes` WHERE 1
?>