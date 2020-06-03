<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Chercher un utilisateur</title>
    <link rel="stylesheet" type="text/css" href="PageRechercheUtilisateur/RechercheUtilisateur.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/header.php" ?>

<body>
<div class="contentBlock" id="searchBlock">
    <form method="post" action="recherche_users">
        <p><label for="recherche">Rechercher : </label><input type="text" placeholder="Entrez un nom" name="recherche"
                                                              id="recherche"></p>
        <p><label for="searchUser">Client</label><input type="radio" name="type" value="client" id="searchUser"></p>
        <p><label for="searchAdmin">Administrateur</label><input type="radio" name="type" value="admin"
                                                                 id="searchAdmin"></p>
        <input type="submit" value="Recherche" name="submit" id="searchButton">
    </form>
</div>

<div id="listOfRegistered">
    <?php
    if ($_SESSION['search'] == "vide") {
        $user=$_SESSION['nom'];
        echo ("<div class='contentBlock' id='usersBlock'>");
            echo ("<h3>Utilisateurs</h3>");
            $utilisateur = selectuser();
            $nombre = count($utilisateur);
            for ($i = 0; $i < $nombre; $i++) {
                $ID = $utilisateur[$i]['ID'];
                $user2=$utilisateur[$i]['nom'];
                echo ("<p>".$utilisateur[$i]['prénom']." ".$utilisateur[$i]['nom']."    ".
                    "<a href='conv/$user2/$user' class='message'>Envoyer un message</a></p>");
            }
        echo ("</div>");

        echo ("<div class='contentBlock' id='adminsBlock'>");
            echo ("<h3>Administateurs</h3>");
            $administrateur = selectadmin();
            $nombre2 = count($administrateur);
            for ($i = 0; $i < $nombre2; $i++) {
                $ID = $administrateur[$i]['ID'];
                $user2=$administrateur[$i]['nom'];
                echo("<p>".$administrateur[$i]['prénom']." ".$administrateur[$i]['nom']."    ".
                    "<a href='conv/$user2/$user' class='message'>Envoyer un message</a></p>");
            }
        echo ("</div>");
    }

    if ($_SESSION['search'] != "vide") {
        echo ("<p class='contentBlock'>");
        $user=$_SESSION['nom'];
        $user2=$_SESSION['search'][0];
        echo($_SESSION['search'][0]);
        echo("  ");
        echo($_SESSION['search'][1]);
        echo "  ";
        echo("<a href='conv/$user/$user2' class='message'>Envoyer un message</a>");
        echo("</br>");
        echo("</br>");
        $_SESSION['search'] = "vide";
    }
    echo ("</p>");
    ?>
</div>
</body>

<?php require "footer/footer.php" ?>
</html>

