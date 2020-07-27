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
    <form id="login" action="../controller/insert_login.php" method="POST">
        <fieldset id="loginresp">
        <legend>login</legend> 
            <div>
               <label> pseudo:</label>
                    <input type="Text" name="pseudo" id="pseudo" placeholder="Entrer le pseudo">
            </div>
            <div>
               <label> mot de passe:</label>
                    <input type="Text" name="mot_de_passe" id="mot_de_passe" placeholder="Entrer le mot_de_passe">
            </div>
            <input type="submit" name="valider" value="valider" id="valider"/> <input type="reset" value="retour" id="retour">