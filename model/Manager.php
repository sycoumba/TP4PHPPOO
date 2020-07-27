<?php

    class Manager
    
	{
		private $_db; // Instance de PDO

		public function __construct($db)
		{
			$this->setDb($db);
		}

		public function setDb(PDO $db)
		{
			$this->_db = $db;
        }
        public function verifieClientMoralExiste($id_entreprise)
		{
			$test = $this->_db->prepare('SELECT id_client FROM client_moral  WHERE 
            id_entreprise = ?');
			$test->execute(array($id_entreprise));

			//$reponse = $test->fetch();
			if($reponse = $test->fetch())
			{
				return $reponse['id_client'];
			}
		}

		public function addClient(Client $client)
		{
			$req = $this->_db->prepare('INSERT INTO client (adresse, telephone, email) 
            VALUES(:adresse, :telephone, :email)');
			$req->execute(array(
				'adresse' => $client->getAdresse(),
				'telephone' => $client->getTelephone(),
				'email' => $client->getEmail()
			));
			$id_client = $this->_db->lastInsertId();
			return $id_client;

            $req->closeCursor();
            
		}
        public function addClientMoral(client_moral $client_moral)
		{
			//insertion des Infos dans la table client Moral
			$req = $this->_db->prepare('INSERT INTO client_moral (nom_entreprise, 
			type_entreprise, raison_social, identifiant_entreprise, adresse_entreprise, id_client) 
            VALUES(:nom_entreprise, :type_entreprise, :raison_social, :identifiant_entreprise,
             :adresse_entreprise, :id_client)');
			$req->execute(array(
            'nom_entreprise' => $client_moral->getNom_entreprise(),
            'type_entreprise' => $client_moral->getType_entreprise(),
			'raison_social' => $client_moral->getRaison_social(),
            'identifiant_entreprise' => $client_moral->getIdentifiant_entreprise(),
            'adresse_entreprise' => $client_moral->getAdresse_entreprise(),
			'id_client' => $client_moral->getId_client()
			));
			$req->closeCursor();
        }
        public function addComptes($comptes)
		{
			$req = $this->_db->prepare('INSERT INTO comptes(numero_compte, cle_rib, solde,
             numero_agence, date_ouverture, id_responsable, id_client) VALUES(:numero_compte,
              :cle_rib, :solde, :date_ouverture, :numero_agence:id_client)');
			$req->execute(array(
				'numero_compte' => $comptes->getNumero_compte(),
				'cle_rib' => $comptes->getCle_rib(),
				'solde' => $comptes->getSolde(),
                'numero_agence' => $comptes->getNumero_agence(),
                'date_ouverture' => $comptes->getDateOuverture(),
                // 'id_responsable' => $comptes->getIdresponsable(),
				'id_client' => $comptes->getId_client()
			));

			$id_comptes = $this->_db->lastInsertId();
			return $id_comptes;

			$req->closeCursor();
        }
        public function addCompteEpargne(compte_epargne $compte_epargne)
		{
			$req = $this->_db->prepare('INSERT INTO compte_epargne (frais_ouverture, 
            montant_remuneration, id_compte)
             VALUES(:frais_ouverture, :montant_remuneration, :id_compte)');
			$req->execute(array(
				'frais_ouverture' => $compte_epargne->getFrais_ouverture(),
				'montant_remuneration' => $compte_epargne->getMontant_remuneration(),
				'id_compte' => $compte_epargne->getId_compte() 
				));
			$req->closeCursor();
		}

		public function addCompteCourant(compte_courant $compte_courant)
		{
			$req = $this->_db->prepare('INSERT INTO compte_courant (agios, id_compte) 
            VALUES(:agios, :id_compte)');
			$req->execute(array(
				'agios' => $compte_courant->getAgios(),
				'id_compte' => $compte_courant->getId_compte() 
				));
			$req->closeCursor();
		}

		public function addCompteBloque(compte_bloque $compte_bloque)
		{
			$req = $this->_db->prepare('INSERT INTO compte_bloque (frais_ouverture, montant_remuneration, 
			delai_blocage, id_compte) VALUES(:frais_ouverture, :montant_remuneration, :delai_blocage, :id_compte)');
			$req->execute(array(
				'frais_ouverture' => $compte_bloque->getfrais_ouverture(),
				'montant_remuneration' => $compte_bloque->getmontant_remuneration(),
				'delai_blocage' => $compte_bloque->getdelai_blocage(),
				'id_compte' => $compte_bloque->getId_compte() 
				));
			$req->closeCursor();
		}

    }
?>
