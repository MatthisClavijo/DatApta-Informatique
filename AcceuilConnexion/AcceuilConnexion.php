<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="AcceuilConnexion.css">


    <head>
        </p>
        <ul>
            <img src = 'Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="#accueil">Accueil</a></li>
            <li><a href="#statistiques">Statistiques</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Communauté</a>
                <div class="dropdown-content">
                    <a href="#">FAQ</a>
                    <a href="#">Classement</a>
                </div>
            </li>
            <li><a href="mon profil">Mon profil</a></li>
            <div id="ProfilBox">
                <p>
                <?php
                $affichage='<p>Bienvenue '.$_SESSION['nom'].'  '.$_SESSION['prénom'].'';
                echo ($affichage);
                ?>
                </p>
            </div>
        </ul>
    </head>

<body>
<p><img src = 'aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
</body>
<?php
require "footer.php"
?>
</html>

