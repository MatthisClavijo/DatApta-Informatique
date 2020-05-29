<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
    <link rel="stylesheet" type="text/css" href="PageStatistiques/PageStatistiques.css">
    <link rel="icon" type="image" href="Images/Infinite_measures_1.gif">
</head>

<?php require "header/header.php"; ?>

<body>

    <aside id="lateralDiv">
        <div id="userInfos">
            <img src="Images/avatar_vide.jpg" alt="Image de profil">
            <p>
                <?php if (isset($_SESSION['prénom'])) { echo ($_SESSION['prénom']); } else { echo ("Prénom"); } ?><br>
                <?php if (isset($_SESSION['nom'])) { echo ($_SESSION['nom']); } else { echo ("Nom"); } ?>
            </p>
        </div>
        <div id="lastData">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mattis massa ac urna tempor sollicitudin. Pellentesque vulputate risus et nisi ultricies rutrum. Maecenas feugiat id elit sollicitudin sagittis. Ut imperdiet malesuada ligula, eu fringilla leo bibendum quis. Donec viverra lacus vitae neque pellentesque, quis pellentesque felis vehicula. Sed ut pulvinar erat, quis sollicitudin risus. Pellentesque eleifend pellentesque velit a scelerisque.</p>
        </div>
        <div id="startTest">
            <a href="">Lancer un test</a>
        </div>
    </aside>

    <div id="mainContent">
        <p>
            <?php
            $data = SelectResult($_SESSION['ID']);
            for ($i=0; $i<sizeof($data);$i++) {
                $data2=SelectUnit($data[$i][4]);
                echo($data[$i][4]);
                echo(" : ");
                echo($data[$i][5]);
                echo ("  ");
                echo ($data2[0][0]);
                echo ("</br>");
                echo ("</br>");
            }
            ?>

        </p>
    </div>

</body>

<?php require "footer/footer.php"; ?>

</html>
