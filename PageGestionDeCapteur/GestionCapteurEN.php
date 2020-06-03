<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Sensors management</title>
    <link rel="stylesheet" type="text/css" href="PageGestionDeCapteur/GestionCapteur.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/headerEN.php" ?>

<body>

<div class="contentBlock" id="addSensorBlock">
    <form method="post" action="add_capteur">
        <h3>Add: </h3>
        <p><label for="sensorName">Name: </label><input type="text" name="Nom" id="sensorName"></p>
        <p><label for="units">Units: </label><input type="text" name="Unité" id="units"></p>
        <input type="submit" value="Add" name="submit" id="addSensorBtn">
    </form>
    <a href="test" id="linkGestionTest">Tests management</a>
</div>

<div class="contentBlock">
    <h3>Sensors: </h3>
    <div id="listOfSensorsBlock">
        <?php
        $capteur=selectcapteur();
        $nombre=count($capteur);
        for ($i=0;$i <$nombre;$i++){
            $ID=$capteur[$i]['Id'];
            echo ("<div class='sensor'>");
            echo ("<p>"."ID: ".$ID." ".$capteur[$i]['Nom']."</p>");
            echo ("<p>"."Unit: ".$capteur[$i]['unité de mesure']."</p>");
            echo ("<a href='delete_capteur/$ID' class='deleteSensor'>Delete</a>");
            echo("</div>");
        }
        ?>
    </div>
</div>

</body>

<?php require "footer/footerEN.php" ?>
</html>
