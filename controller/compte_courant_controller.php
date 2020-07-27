<?php

	require_once ("../model/db.php");
	require_once ("../model/Manager.php");
    require_once ("../entites/Compte.php");
    require_once ("../entites/Compte_courant.php");
    $manager = new Manager($db);

	extract($_POST);

//insertion des infos dans la table compte
$comptes = new Compte ();
$comptes->setnumero_compte($numero_compte);
$comptes-> setcle_rib($cle_rib);
// $comptes-> setsolde_compte($solde_compte);
$comptes->setnumero_agence($numero_agence);
$comptes->setdate_ouverture($date_ouverture);
// $id_client = $manager->addClient($client);
$id_compte = $manager->addComptes($comptes);

//insertion des infos dans la table compte courant
$compte_courant = new compte_courant ();
$compte_courant->setAgios ($agios);
$compte_courant->setId_compte($id_compte);

$manager->addCompteCourant($compte_courant);
