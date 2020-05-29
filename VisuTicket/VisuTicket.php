<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Accueil</title>
<head>

    <link rel="stylesheet" href="VisuTicket/VisuTicket.css">


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
                    <a href="Ticket">Voir Ticket</a>
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
<div id="BoxTicket" >
    <?php
    $data=GetTicket();
    for ($i=0;$i<sizeof($data);$i++){
        $name=$data[$i][0];
        $date=$data[$i][2];
        echo ($data[$i][0]);
        echo ("  ");
        echo("<a href='detail/$name/$date' id='detail'>Voir Ticket</a>");
        echo "   ";
        echo ("<a href='supprTicket/$name/$date' id='supprimer'>Suppression</a>");
        echo ("</br>");
        echo ("</br>");

    }

    ?>
</div>
</body>
<?php
require "footer/footer.php"
?>
</html>