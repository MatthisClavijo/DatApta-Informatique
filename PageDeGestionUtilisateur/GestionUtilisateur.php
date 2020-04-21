<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Gestion Utilisateurs</title>
<head>

    <link rel="stylesheet" href="PageDeGestionUtilisateur/GestionUtilisateur.css">


    <head>
        </p>
        <ul>
            <img src = 'Images/Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="accueil">Accueil</a></li>
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
        </ul>
    </head>

<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<div id="BoxUtilisateur">
    <?php
    echo "<div id='titre1'>Client :</div> ";
    echo "</br>";
    $utilisateur=selectuser();
    $nombre=count($utilisateur);
    for ($i=0;$i <$nombre;$i++){
        $ID=$utilisateur[$i]['ID'];
        echo ($utilisateur[$i]['nom']);
        echo "  ";
        echo ($utilisateur[$i]['prénom']);
        echo "  ";
        echo("<a href='delete_user/$ID' class='option'>Supprimer</a>");
        echo "  ";
        echo ("<a href='up_user/$ID' class='option' id='up'>Donner droits d'administration</a>");
        echo "  ";
        echo("<a href='modif_admin' class='option' id='modif'>Modifier le profil</a>");
        echo("</br>");
        echo("</br>");
    }
    echo "<div id='titre1'>Administrateurs :</div> ";
    echo "</br>";
    $administrateur=selectadmin();
    $nombre2=count($administrateur);
    for ($i=0;$i <$nombre2;$i++){
        $ID=$administrateur[$i]['ID'];
        echo ($administrateur[$i]['nom']);
        echo "  ";
        echo ($administrateur[$i]['prénom']);
        echo "  ";
        echo ("<a href='down_user/$ID' class='option' id='down'>Enlever droits d'administration</a>");
        echo("</br>");
        echo("</br>");
    }
    ?>

</div>
</body>
<?php
require "footer/footer.php"
?>
</html>

