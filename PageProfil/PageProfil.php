<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon profil</title>
    <link rel="stylesheet" type="text/css" href="PageProfil\PageProfil.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "header\header.php" ?>

<body>
<div class="contentBlock" id="profileBlock">
    <h3 id="profileTitle">Profil</h3>
    <?php
    echo ("<div id='privateInfos'>");
        echo ("<h4>Informations personnelles : </h4>");
        echo ("<p>Nom complet : ".$_SESSION['prénom']." ".$_SESSION['nom']."</p>");
        echo ("<p>Date de naissance : ".$_SESSION['date_de_naissance']."</p>");
    echo ("</div>");
    echo ("<div id='idInfos'>");
        echo ("<h4>Informations de connexion : </h4>");
        echo ("<p>Adresse email : ".$_SESSION['Adresse mail']."</p>");
    echo ("</div>");
    ?>
    <p><a href="modifprofil" id="linkModifProfile">Modifier mon profil</a></p>
</div>
</body>

<?php require "footer/footer.php"; ?>
</html>

