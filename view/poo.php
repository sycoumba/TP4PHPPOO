<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="../Public/style.css">
</head>
<!-- onload="masquerDiv();" -->
<body >
    <header>
        <div class="main">
            <img src="../Public/logo.jpeg">
            <h1> BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
        </div>

    </header>

    <h2> VEUILLEZ SELECTONNEZ LE TYPE DE CLIENT A AJOUTER</h2>
    <fieldset class="info1">
            <p>OUVERTURE COMPTE</p>
            <form id="client_salarie" action="../Controller/recup_donnees.php" method="POST">   
            <p> types de clients:
            <select name="types_de_client" id="type_de_client">
                <option value="Client_salarie" > client_salarie </option>
                <option value="Client_non_salarie"> client_non_salarie </option>
                <option value="Client_moral"> client_moral </option>
            </select> 
            </P>
            <P>nouveau client
            <input type="radio" name="idclient" value="nouveau Client" id="nouveau"> </P>
            <P>Client existant
            <input type="radio" name="idclient" value="client existant" id="existant"> </P>
            <P>Identifiant Client
            <input class="champ" type="text" value="rechercher"/>
            <input type="submit" value="soumettre" id="soumettre"></p>
          
            <h3>INFORMATIONS DU CLIENT SALARIES</h3>
            <div>
                <p> nom: <strong>*</strong>
                <input type="text" name="nom" id="Nom" placeholder="Entrer le nom"></p>
            </div>
            <div>
                <p> prenom : <strong>*</strong>
                <input type="text" name="prenom" id="Prenom" placeholder="Entrer  le prenom"></p>
            </div>
            <div>
                <p> profession:  <strong>*</strong>
                <input type="text" name="profession" id="Profession" placeholder="Entrer la Profession"></p>
            </div>
            <div>
                <p> salaire_actuel : <strong>*</strong>
                <input type="text" name="salaire_actuel" id="salaire_actuel" placeholder="Entrer  le salaire_actuel"></p>
            </div>
            <div>
                <p> nom_entreprise:<strong>*</strong>
                <input type="text" name="nom_entreprise" id="Nom_employeur" placeholder="Entrer le nom_entreprise"></p>
            </div>
            <div>
                <p> adresse_entreprise:<strong>*</strong>
                <input type="Texte" name="adresse_entreprise" id="adresse_entreprise" placeholder="Entrer l'adresse_entreprise"></p>
           </div>
           <div>
                <p> identifiant_entreprise :<strong>*</strong>
                <input type="text" name="identifiant_entreprise" id="identifiant_entreprise" placeholder="Entrer  l'identifiant_entreprise"></p>
            </div>
            <div>
                <p> numero_CNI :<strong>*</strong>
                <input type="text" name="numero_CNI" id="numero_CNI" placeholder="Entrer  le numero_CNI"></p>
            </div>
            
            <div>
                <p> adresse:<strong>*</strong>
                <input type="text" name="Adresse" id="Adresse" placeholder="Entrer l'adresse"></p>
            </div>
            <p> téléphone:<strong>*</strong>
                <input type="telephone" name="telephone" id="elephone" placeholder="Entrer le numero de téléphone"></p>
            </div>
            <div>
                <p> email:<strong>*</strong>
                <input type="text" name="email" id="email" placeholder="Entrer l'email"></p>
            </div>
        <h6> INFORMATIONS COMPTE</h6>
            <div>
            <p> Types de Comptes:
            <select name="Types_de_Comptes" id="type_compte">
                <option value="Compte_Epargne"  id="epargne"> Compte Epargne </option>
                <option value="Compte_Courant" id="courant"> Compte Courant </option>
                <option value="Compte_Bloqué" id="bloque"> Compte bloque </option>
            </select> 
            </p>
        <div>
            <p> numero_Agence:<strong>*</strong>
            <input type="text" name="numero_Agence" id="numero_Agence" placeholder="Entrer le numero de l'agence"></p>
        </div>
        <div>
            <p> numero_compte:<strong>*</strong>
            <input type="text" name="numero_compte" id="numero_compte" placeholder="Entrer le numero_compte"></p>
        </div>
        <div>
            <p> cle_rib:<strong>*</strong>
            <input type="text" name="cle_rib" id="cle_rib" placeholder="Entrer la cle_rib"></p>
        </div>
        <div>
            <p> date_ouverture:<strong>*</strong>
            <input type="date" name="date_ouverture" id="date_ouverture"></p>
        </div>
        <div>
            <p> frais_ouverture:<strong>*</strong>
            <input type="text" name="frais_ouverture" id="frais_ouverture" placeholder="Entrer le frais_ouverture"></p>
        </div>
        <div>
            <p> agios:<strong>*</strong>
            <input type="text" name="agios" id="agios" placeholder="Entrer l'agios"></p>
        </div>
        <div>
            <div>
            <p> duree_blocage: <strong>*</strong>
            <input type="text" name="duree_blocage" id="duree_blocage" placeholder="Entrer la duree de blocage"></p>
        </div> 
    
            <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        
</form>

        </fielset>
        <form id="client_non_salarie" action="../Controller/recup_donnees.php" method="POST">  
        <h4>INFORMATIONS DU CLIENT NON SALARIES</h4>
            <div>
                <p> nom:<strong>*</strong>
                <input type="text" name="nom" id="Nom" placeholder="Entrer le nom"></p>
            </div>
            <div>
                <p> prenom :<strong>*</strong>
                <input type="text" name="prenom" id="Prenom" placeholder="Entrer  le prenom"></p>
            </div>
             
             <div>
                <p> activite:<strong>*</strong>
                <input type="Text" name="activite" id="activite" placeholder="Entrer l'activite"></p>
            </div>
            <div>
                <p> numero_CNI :<strong>*</strong>
                <input type="text" name="numero_CNI" id="numero_CNI" placeholder="Entrer  le numero_CNI"></p>
            </div>
            <div>
                <p> adresse:<strong>*</strong>
                <input type="text" name="Adresse" id="Adresse" placeholder="Entrer l'adresse">
            </div>
            <p> téléphone:<strong>*</strong>
                <input type="telephone" name="telephone" id="elephone" placeholder="Entrer le numero de téléphone">
            </div>
            <div>
                <p> email:<strong>*</strong>
                <input type="text" name="email" id="email" placeholder="Entrer Email">
            </div>
            <h6> INFORMATIONS COMPTE</h6>
            <div>
            <p> Types de Comptes:
            <select name="Types_de_Comptes" id="type_compte">
                <option value="Compte_Epargne"  id="epargne"> Compte Epargne </option>
                <option value="Compte_Courant" id="courant"> Compte Courant </option>
                <option value="Compte_Bloqué" id="bloque"> Compte bloque </option>
            </select> 
            </p>
        <div>
            <p> numero_Agence:<strong>*</strong>
            <input type="text" name="numero_Agence" id="numero_Agence" placeholder="Entrer le numero de l'agence"></p>
        </div>
        <div>
            <p> numero_compte:<strong>*</strong>
            <input type="text" name="numero_compte" id="numero_compte" placeholder="Entrer le numero_compte"></p>
        </div>
        <div>
            <p> cle_rib:<strong>*</strong>
            <input type="text" name="cle_rib" id="cle_rib" placeholder="Entrer la cle_rib"></p>
        </div>
        <div>
            <p> date_ouverture:<strong>*</strong>
            <input type="date" name="date_ouverture" id="date_ouverture"></p>
        </div>
        <div>
            <p> frais_ouverture:<strong>*</strong>
            <input type="text" name="frais_ouverture" id="frais_ouverture" placeholder="Entrer le frais_ouverture"></p>
        </div>
        <div>
            <p> agios:<strong>*</strong>
            <input type="text" name="agios" id="agios" placeholder="Entrer l'agios"></p>
        </div>
        <div>
            <div>
            <p> duree_blocage: <strong>*</strong>
            <input type="text" name="duree_blocage" id="duree_blocage" placeholder="Entrer la duree de blocage"></p>
        </div> 
    
            <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        
</form>
        </fielset>
        <form id="client_moral" action="../Controller/recup_donnees.php" method="POST">
        <h5>INFORMATIONS DU CLIENT MORAL</h5>
            <div>
                <p> nom_entreprise:<strong>*</strong>
                <input type="Text" name="nom_entreprise" id="nom_entreprise" placeholder="Entrer le nom_entreprise">
            </div>
            <div>
                <p> type_entreprise:<strong>*</strong>
                <input type="Texte" name="type_entreprise" id="type_entreprise" placeholder="Entrer type_entreprise">
        
           </div>
            <div>
                <p> raison_social:<strong>*</strong>
                <input type="Text" name="raison_social" id="raison_social" placeholder="Entrer la raison_social"></p>
            </div>
            <div>
                <p> identifiant_entreprise :<strong>*</strong>
                <input type="text" name="identifiant_entreprise" id="identifiant_entreprise" placeholder="Entrer  l'identifiant_entreprise"></p>
            </div>
        <div>
                <p> adresse_entreprise:<strong>*</strong>
                <input type="Texte" name="adresse_entreprise" id="adresse_entreprise" placeholder="Entrer l'adresse_entreprise"></p>
                </div>
    </div>
    <h6> INFORMATIONS COMPTE</h6>
            <div>
            <p> Types de Comptes:
            <select name="Types_de_Comptes" id="type_compte">
                <option value="Compte_Epargne"  id="epargne"> Compte Epargne </option>
                <option value="Compte_Courant" id="courant"> Compte Courant </option>
                <option value="Compte_Bloqué" id="bloque"> Compte bloque </option>
            </select> 
            </p>
        <div>
            <p> numero_Agence:<strong>*</strong>
            <input type="text" name="numero_Agence" id="numero_Agence" placeholder="Entrer le numero de l'agence"></p>
        </div>
        <div>
            <p> numero_compte:<strong>*</strong>
            <input type="text" name="numero_compte" id="numero_compte" placeholder="Entrer le numero_compte"></p>
        </div>
        <div>
            <p> cle_rib:<strong>*</strong>
            <input type="text" name="cle_rib" id="cle_rib" placeholder="Entrer la cle_rib"></p>
        </div>
        <div>
            <p> date_ouverture:<strong>*</strong>
            <input type="date" name="date_ouverture" id="date_ouverture"></p>
        </div>
        <div>
            <p> frais_ouverture:<strong>*</strong>
            <input type="text" name="frais_ouverture" id="frais_ouverture" placeholder="Entrer le frais_ouverture"></p>
        </div>
        <div>
            <p> agios:<strong>*</strong>
            <input type="text" name="agios" id="agios" placeholder="Entrer l'agios"></p>
        </div>
        <div>
            <div>
            <p> duree_blocage: <strong>*</strong>
            <input type="text" name="duree_blocage" id="duree_blocage" placeholder="Entrer la duree de blocage"></p>
        </div> 
    
            <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>
        
</form>
        </fielset>

    <script src="../Public/control.js"></script>
</body>
</html>