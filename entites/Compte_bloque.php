<?php

class compte_bloque
{
    private $id_compte;
    private $frais_ouverture;
    private $delai_blocage;
    private $montant_remuneration;

    function __construct() // Constructeur demandant 3 paramètres
    {
        // echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
        // $this->frais_ouverture = $frais_ouverture; // Initialisation du frais d'ouverture.
        // $this->delai_blocage = $delai_blocage; // Initialisation du delai blocage.
         // $this->montant_remuneration = $montant_remuneration; // Initialisation du montant_remuneration.
    }
    public function setId_compte($id_compte)
    {
       $this->id_compte = $id_compte;
    }
   
    public function setfrais_ouverture($frais_ouverture)
    {
       $this->frais_ouverture = $frais_ouverture;
    }
    public function setdelai_blocage($delai_blocage)
    {
       $this->delai_blocageb = $delai_blocage;
    }
    public function setmontant_remuneration($montant_remuneration)
    {
       $this->montant_remuneration = $montant_remuneration;
    }

// getters
public function getId_compte()
    {
        return $this->id_compte;
    }
    public function getfrais_ouverture()
    {
        return $this->frais_ouverture;
    }
    public function getdelai_blocage()
    {
        return $this->delai_blocage;
    }
    public function getmontant_remuneration()
    {
        return $this->montant_remuneration;

    }
    
}

    // `id_compte_bloque`, `frais_ouverture`, `delai_blocage`, `montant_remuneration`, `id_compte` 
    // FROM `compte_bloque` WHERE 1
