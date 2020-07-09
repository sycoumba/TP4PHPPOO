<?php
require_once 'db.php'; 

     function addClient_salarie($adresse, $telephone, $email, $nom, $prenom, $profession, $salaire_actuel, $nom_entreprise,
 $adresse_entreprise, $identifiant_entreprise, $numero_CNI, $id_client)
{
    $conn = getConnection();
    $id_client = addClient($adresse, $telephone, $email);
    $sql = "INSERT INTO client_salarie values (null, '$nom', '$prenom', '$profession', '$salaire_actuel', '$nom_entreprise',
    '$adresse_entreprise', '$identifiant_entreprise', '$numero_CNI', '$id_client')";
     $conn->exec($sql);
}
     ?>