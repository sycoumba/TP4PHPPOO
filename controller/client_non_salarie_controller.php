
<?php
require_once ("../model/db.php");
require_once ("../model/Manager.php");
require_once ("../entites/Client.php");
require_once ("../entites/Client_non_salarie.php");

$manager = new Manager($db);

    extract($_POST);
    // Insertion des infos dans la table clients
    $client = new Client ();
$client->setadresse($adresse);
$client->settelephone($telephone);
$client->setemail($email);
$id_client = $manager->addClient($client);

//insertion des infos dans la table client Non Salarie
$client_non_salarie = new client_non_salarie ();
$client_non_salarie->setNom($nom);
$client_non_salarie->setPrenom($prenom);
$client_non_salarie->setActivite($activite);
$client_non_salarie->setCni($cni);
//$client_non_salarie->setId_client($id_client);

$manager->addClientNonSalarie($client_non_salarie);

// id_non_salarie`, `nom`, `prenom`, `activite`, `numero_CNI`, `id_client` 




    ?>
