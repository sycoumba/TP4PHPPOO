<?php

	require_once ("../model/db.php");
	require_once ("../model/Manager.php");
	require_once ("../entites/Client.php");
	require_once ("../entites/Client_moral.php");
	// require_once ("../entites/Compte.php");
	// require_once ("../entites/Compte_courant.php");

	$manager = new Manager($db);

	extract($_POST);

	// $date_inscription = date('yy-m-d h:i:s');
	// $date_ouverture = date('yy-m-d h:i:s');
	// $date_changement_etat = date('yy-m-d h:i:s');
// echo 'adresse = '.$adresse;
// Insertion des infos dans la table clients
$client = new Client ();
$client->setadresse($adresse);
$client->settelephone($telephone);
$client->setemail($email);
$id_client = $manager->addClient($client);

//insertion des infos dans la table client Moral
$client_moral = new client_moral ();
$client_moral->setNom_entreprise($nom_entreprise);
$client_moral->setType_entreprise($type_entreprise);
$client_moral->setRaison_social($raison_social);
$client_moral->setIdentifiant_entreprise($identifiant_entreprise);
$client_moral->setAdresse_entreprise($adresse_entreprise);
$client_moral->setId_client($id_client);

$manager->addClientMoral($client_moral);
// //insertion des infos dans la table compte
// $comptes = new Comptes ();
// $comptes->setnumero_compte($numero_compte);
// $comptes-> setcle_rib($cle_rib);
// $comptes-> setsolde_compte($solde_compte);
// $comptes->setnumero_agence($setnumero_agence);
// $comptes->setdate_ouverture($setdate_ouverture);
// $id_compte = $manager->addComptes($comptes);

// //insertion des infos dans la table compte courant
// $compte_courant = new compte_courant ();
// $compte_courant->setagios ($agios);
// $compte_courant->setId_compte($id_compte);

// $manager->addCompteCourant($compte_courant);



// var_dump($_POST);
    // // Insertion infos sur la tables compte général

    // $comptes = new Comptes($numero_compte, $cle_rib, $solde, $numero_agence, $date_ouverture, 
    // $id_responsable, $id_client);
	// $id_compte = $manager->addComptes($comptes);
	?>
