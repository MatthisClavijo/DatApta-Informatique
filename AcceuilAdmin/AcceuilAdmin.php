<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Accueil</title>
<head>

    <link rel="stylesheet" href="AcceuilAdmin/AcceuilAdmin.css">


    <head>
        </p>
        <ul>
            <img src = 'Images/Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="#accueil">Accueil</a></li>
            <li><a href="#statistiques">Statistiques</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Communauté</a>
                <div class="dropdown-content">
                    <a href="#">FAQ</a>
                    <a href="#">Classement</a>
                </div>
            </li>
            <li><a href="profil">Mon profil</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Gestion</a>
                <div class="dropdown-content">
                    <a href="gestion_u">Gestion Utilisateur</a>
                    <a href="#">Gestion FAQ</a>
                    <a href="capteur">Gestion Capteurs</a>
                </div>
            </li>
            <div id="ProfilBox">
                <p>
                    <?php
                    $affichage='<p>Bienvenue '.$_SESSION['nom'].'  '.$_SESSION['prénom'].'';
                    echo ($affichage);
                    ?>
                    <a href="deconnexion" id="deconnexion" ></br>Déconnexion</a>
                </p>
            </div>
        </ul>
    </head>

<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
</body>
<?php
require "footer/footer.php"
?>
</html>

