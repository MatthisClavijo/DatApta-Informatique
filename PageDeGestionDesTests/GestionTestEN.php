<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Tests management</title>
    <link rel="stylesheet" type="text/css" href="PageDeGestionDesTests/GestionTest.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "headerEN/header.php" ?>

<body>
<div class="contentBlock" id="addBlock">
    <form method="post" action="add_test">
        <h3 id="titleOfAdd">Add</h3>
        <p><label for="nom">Name: </label><input type="text" name="Nom" id="nom"></p>
        <p><label for="idCapteurs">Sensors ID: </label><input type="text" name="Ids" id="idCapteurs"></p>
        <input type="submit" value="Add" name="submit" id="add">
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
        echo ("<p>Sensors ID: ".$test[$i]['id capteurs']."</p>");
        echo("<a href='delete_test/$ID' class='delete'>Delete</a>");
        echo ("</div>");
    }
    ?>
</div>
</body>

<?php require "footerEN/footer.php" ?>

</html>

