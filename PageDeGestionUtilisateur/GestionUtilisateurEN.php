<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Users management</title>
    <link rel="stylesheet" type="text/css" href="PageDeGestionUtilisateur\GestionUtilisateur.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "headerEN\header.php" ?>

<body>
<div class="contentBlock" id="adminBlock">
    <h3>Administrators: </h3>
    <?php
    $administrateur=selectadmin();
    $nombre2=count($administrateur);
    for ($i=0;$i <$nombre2;$i++){
        $ID=$administrateur[$i]['ID'];
        echo ("<div class='admin'>");
        echo ("<p>".$administrateur[$i]['nom']." ".$administrateur[$i]['prénom']."</p>");
        echo ("<a href='down_user/$ID' class='option downgrade'>Remove administration rights</a>");
        echo ("</div>");
    }
    ?>
</div>
<div class="contentBlock" id="userBlock">
    <h3>Users: </h3>
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
        echo ("<a href='delete_user/$ID' class='option'>Delete</a><br>");
        echo ("<a href='up_user/$ID' class='option upgrade'>Give administration rights</a><br>");
        echo ("<a href='modif_admin' class='option modif'>Modify profile</a>");
        echo ("</div>");
        echo ("</div>");
    }
    ?>
</div>
</body>

<?php require "footerEN/footer.php" ?>
</html>
