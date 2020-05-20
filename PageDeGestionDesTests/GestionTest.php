<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Accueil</title>
<head>

    <link rel="stylesheet" href="PageDeGestionDesTests/Gestiontest.css">


    <head>
        </p>
        <ul>
            <img src = 'Images/Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="accueil">Accueil</a></li>
            <li><a href="statistiques">Statistiques</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Communauté</a>
                <div class="dropdown-content">
                    <a href="foire">FAQ</a>
                    <a href="#">Classement</a>
                    <a href="recherche">Recherche Utilisateur</a>
                    <a href="mess">Messagerie</a>
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
<div id="BoxTest">
    <form id="Ajouter" method="post" action="add_test">
        <p>Ajouter :  Nom :<input type="text" name="Nom" > id des capteurs: <input type="text" name="Ids">
            <input type="submit" value="Ajouter" name="submit">
        </p>
        </br>
    </form>
    <?php
    $test=selecttest();
    $nombre=count($test);
    for ($i=0;$i <$nombre;$i++){
        $ID=$test[$i]['id'];
        echo ($test[$i]['Nom']);
        echo "    ";
        echo "Id des capteurs : ";
        echo ($test[$i]['id capteurs']);
        echo "  ";
        echo("<a href='delete_test/$ID' class='option'>Supprimer</a>");
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

