<?php

     function getConnection()
     {
          $host = 'localhost';
          $user = 'root';
          $password = '';
          $dbname = 'banque_peuple';

          $dsn = "mysql: host = $host;dbname = $dbname";
          try{ 
               $db = new PDO($dsn, $user, $password);
          }catch (PDOException $exe){
               die('erreur :'.$exe->getMessage());
          }
          return $db;
     }

    
     function addClient_salarie($nom, $prenom, $profession, $salaire_actuel, $nom_entreprise,
 $adresse_entreprise, $identifiant_entreprise, $numero_CNI, $id_client)
{
    $conn = getConnection();
    // $id_client = addClient($adresse, $telephone, $email);
    $sql = "INSERT INTO client_salarie values (null, '$nom', '$prenom', '$profession', '$salaire_actuel', '$nom_entreprise',
    '$adresse_entreprise', '$identifiant_entreprise', '$numero_CNI', '$id_client')";
     $conn->exec($sql);

     if(exec($sql))
     {
         echo "données insérées";
     }
     else{
         echo "données non insérées";
     }
     function addClient_non_salarie($nom, $prenom, $activite, $numero_CNI, $id_client)
     {
         $conn = getConnection();
         $sql = "INSERT INTO client_non_salarie values(Null, $nom, $prenom, $activite, $numero_CNI,$id_client)";
          echo $sql;
         $conn->exec($sql);
     }  
}

?>