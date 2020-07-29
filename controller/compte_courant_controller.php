<?php

	require_once ("../model/db.php");
	require_once ("../model/Manager.php");
    require_once ("../entites/Compte.php");
    require_once ("../entites/Compte_courant.php");
    require_once ("../entites/Client.php");
    $manager = new Manager($db);

    extract($_POST);
// $client = new Client();
//insertion des infos dans la table compte
$compte = new Compte ();
$compte->setnumero_compte($numero_compte);
$compte->setcle_rib($cle_rib);
$compte->setsolde_compte($solde_compte);
$compte->setnumero_agence($numero_agence);
$compte->setdate_ouverture($date_ouverture);
// $id_client = $manager->addClient($client);
$id_compte = $manager->addCompte($compte);

//insertion des infos dans la table compte courant
$compte_courant = new compte_courant ();
$compte_courant->setAgios ($agios);
$compte_courant->setId_compte($id_compte);

$manager->addCompteCourant($compte_courant);
