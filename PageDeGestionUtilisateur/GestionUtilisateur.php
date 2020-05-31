<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Gestion des utilisateurs</title>
    <link rel="stylesheet" type="text/css" href="PageDeGestionUtilisateur/GestionUtilisateur.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/header.php" ?>

<body>
<div class="contentBlock" id="adminBlock">
    <h3>Administrateurs : </h3>
    <?php
    $administrateur=selectadmin();
    $nombre2=count($administrateur);
    for ($i=0;$i <$nombre2;$i++){
        $ID=$administrateur[$i]['ID'];
        echo ("<div class='admin'>");
            echo ("<p>".$administrateur[$i]['nom']." ".$administrateur[$i]['prénom']."</p>");
            echo ("<a href='down_user/$ID' class='option downgrade'>Enlever les droits d'administration</a>");
        echo ("</div>");
    }
    ?>
</div>
<div class="contentBlock" id="userBlock">
    <h3>Utilisateurs : </h3>
    <?php
    $utilisateur=selectuser();
    $nombre=count($utilisateur);
    for ($i=0;$i <$nombre;$i++){
        $ID=$utilisateur[$i]['ID'];
        echo ("<div class='user'>");
            echo ("<div>");
                echo ("<p>".$utilisateur[$i]['nom']." ".$utilisateur[$i]['prénom']."</p>");
            echo ("</div>");
            echo ("<div>");
                echo ("<a href='delete_user/$ID' class='option'>Supprimer</a><br>");
                echo ("<a href='up_user/$ID' class='option upgrade'>Donner droits d'administration</a><br>");
                echo ("<a href='modif_admin' class='option modif'>Modifier le profil</a>");
            echo ("</div>");
        echo ("</div>");
    }
    ?>
</div>
</body>

<?php require "footer/footer.php" ?>
</html>

