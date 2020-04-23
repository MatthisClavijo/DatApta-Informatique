<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Gestion Capteurs</title>
<head>

    <link rel="stylesheet" href="PageGestionDeCapteur/GestionCapteur.css">


    <head>
        </p>
        <ul>
            <img src = 'Images/Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="accueil">Accueil</a></li>
            <li><a href="#statistiques">Statistiques</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Communauté</a>
                <div class="dropdown-content">
                    <a href="foire">FAQ</a>
                    <a href="#">Classement</a>
                </div>
            </li>
            <li><a href="profil">Mon profil</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Gestion</a>
                <div class="dropdown-content">
                    <a href="gestion_u">Gestion Utilisateur</a>
                    <a href="gestion_faq">Gestion FAQ</a>
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
<div id="BoxCapteur">
    <form id="Ajouter" method="post" action="add_capteur">
        <p>Ajouter :  Nom :<input type="text" name="Nom" > Unité : <input type="text" name="Unité">
            <input type="submit" value="Ajouter" name="submit">
        </p>
    </br>
    </form>
    <?php
    $capteur=selectcapteur();
    $nombre=count($capteur);
    for ($i=0;$i <$nombre;$i++){
        $ID=$capteur[$i]['Id'];
        echo ("ID : ");
        echo (" ");
        echo($ID);
        echo"    ";
        echo ($capteur[$i]['Nom']);
        echo "  ";
        echo ($capteur[$i]['unité de mesure']);
        echo "  ";
        echo("<a href='delete_capteur/$ID' class='option' id='suppr'>Supprimer</a>");
        echo("</br>");
        echo("</br>");
    }
    ?>
    <a href="test" class="option">Gestion des tests</a>

</div>
</body>
<?php
require "footer/footer.php"
?>
</html>