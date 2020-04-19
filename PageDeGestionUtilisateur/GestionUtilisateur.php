<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Acceuil</title>
<head>

    <link rel="stylesheet" href="Page de gestion des utilisateurs/GestionUtilisateur.css">


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
                    <a href="#">Gestion Capteurs</a>
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
    $utilisateur=selectuser();
    $nombre=count($utilisateur);
    for ($i=0;$i <$nombre;$i++){
        $ID=$utilisateur[$i]['ID'];
        echo ($utilisateur[$i]['nom']);
        echo "  ";
        echo ($utilisateur[$i]['prénom']);
        echo "  ";
        echo("<a href='delete/$ID' class='option'>Supprimer</a>");
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

