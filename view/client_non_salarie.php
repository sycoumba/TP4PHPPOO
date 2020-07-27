<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<!-- onload="masquerDiv();" -->

<body>
    <header>
        <div class="main">
            <img src="../public/logo.jpeg">
            <h1> BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
        </div>

    </header>

    <h2> VEUILLEZ SELECTONNEZ LE TYPE DE CLIENT A AJOUTER</h2>

    <p>OUVERTURE COMPTE</p>
    <P>nouveau client 
        <input type="radio" name="idclient" value="nouveau Client" id="nouveau">  </P>
    <P>Client existant
        <input type="radio" name="idclient" value="client existant" id="existant"> 
        Identifiant Client 
        <input class="champ" type="text" value="rechercher" />
        <input type="submit" value="soumettre" id="soumettre"> </P>


    <form id="client_non_salarie" action="../controller/client_non_salarie_controller.php" method="POST">
        <fieldset id="non_salarie">
            <legend>INFORMATIONS DU CLIENT NON SALARIE</legend> 
            <div>
            <label> nom:</label>
                    <input type="Texte" name="nom" id="nom" placeholder="Entrer le nom">

            </div>
            <div>
            <label> prenom:</label>
                    <input type="Texte" name="prenom" id="prenom" placeholder="Entrer le prenom">
            </div>
        
            <div>
            <label> activite_client :</label>
                    <input type="text" name=" activite_client" id=" activite_client" placeholder="Entrer  l' activite_client"></p>
            </div>
            <div>
            <label>cni:</label>
                    <input type="Texte" name="cni" id="cni" placeholder="Entrer le 
                    cni"></p>
            </div>

                <input type="submit" name="valider" value="valider" id="valider" /> <input type="reset" value="retour" id="retour"></p>

        </fieldset>
    </form>
    <script src="../public/control.js"></script>
</body>

</html>








