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
            <p><?php

                    $data = SelectResult($_SESSION['ID']);
                    if (sizeof($data )!=0){
                        $data2 = SelectUnit($data[sizeof($data) - 1][4]);
                        echo($data[sizeof($data) - 1][2]);
                        echo("</br>");
                        echo($data[sizeof($data) - 1][4]);
                        echo("</br>");
                        echo($data[sizeof($data) - 1][5]);
                        echo("  ");
                        echo($data2[0][0]);
                    }
                    else{
                        echo "Vous n'avez fait aucun test ! ";
                    }

                
                ?></p>
        </div>
        <div id="startTest">
            <a href="">Lancer un test</a>
        </div>
    </aside>

    <div id="mainContent">
        <p>
            <?php

            if (sizeof($data )!=0) {
                for ($i = 0; $i < sizeof($data); $i++) {
                    $data2 = SelectUnit($data[$i][4]);
                    if ($i == 0) {
                        echo($data[$i][2]);
                    } elseif ($data[$i][2] != $data[$i - 1][2]) {
                        echo($data[$i][2]);
                    }
                    echo("</br>");
                    echo($data[$i][4]);
                    echo(" : ");
                    echo($data[$i][5]);
                    echo("  ");
                    echo($data2[0][0]);
                    echo("</br>");
                    echo("</br>");
                }
            }
            else{
                echo "Vous n'avez aucun résultat ! ";
            }

            ?>

        </p>
    </div>

</body>

<?php require "footer/footer.php"; ?>

</html>
