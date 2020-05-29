<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Gestion des tests</title>
    <link rel="stylesheet" type="text/css" href="PageDeGestionDesTests\GestionTest.css">
    <link rel="icon" type="image" href="Images\Infinite_measures_1.gif">
</head>

<?php require "header\header.php" ?>

<body>
<div class="contentBlock" id="addBlock">
    <form method="post" action="add_test">
        <h3 id="titleOfAdd">Ajouter</h3>
        <p><label for="nom">Nom : </label><input type="text" name="Nom" id="nom"></p>
        <p><label for="idCapteurs">Id des capteurs : </label><input type="text" name="Ids" id="idCapteurs"></p>
        <input type="submit" value="Ajouter" name="submit" id="add">
    </form>
</div>
<div id="listOfTests">
    <?php
    $test=selecttest();
    $nombre=count($test);
    for ($i=0;$i <$nombre;$i++){
        echo ("<div class='contentBlock test'>");
        $ID=$test[$i]['id'];
        echo ("<h3>".$test[$i]['Nom']."</h3>");
        echo ("<p>Id des capteurs : ".$test[$i]['id capteurs']."</p>");
        echo("<a href='delete_test/$ID' class='delete'>Supprimer</a>");
        echo ("</div>");
    }
    ?>
</div>
</body>

<?php require "footer/footer.php" ?>

</html>

