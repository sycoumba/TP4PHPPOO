<?php

require_once 'db.php';
function addClient($adresse, $telephone, $email)
{
    $conn = getConnection(); 
    $sql = "INSERT INTO client values (null, '$adresse', '$telephone', '$email')";
    $ok = $conn->exec($sql);
    if ($ok === 1) {
        $id_client = $conn->lastInsertId();
        return $id_client;
    }else
        return 0;
    
}

?>