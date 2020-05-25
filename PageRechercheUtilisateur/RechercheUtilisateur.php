<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Recherche Utilisateurs</title>
<head>

    <link rel="stylesheet" href="PageRechercheUtilisateur/RechercheUtilisateur.css">


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
            <?php
            if($_SESSION['type']=="admin"){
                echo"  <li class=\"dropdown\">
                <a href=\"javascript:void(0)\" class=\"dropbtn\">Gestion</a>
                <div class=\"dropdown-content\">
                    <a href=\"gestion_u\">Gestion Utilisateur</a>
                    <a href=\"gestion_faq\">Gestion FAQ</a>
                    <a href=\"capteur\">Gestion Capteurs</a>
                </div>";
            }
            ?>
        </ul>
    </head>

<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<div id="BoxUtilisateur">
    <form method="post" action="recherche_users">
    <input type="text" placeholder="Entrez un nom" id="recherche" name="recherche">
        <input type="radio" name="type" value="client">Client
        <input type="radio" name="type" value="admin">Administrateur
        <input type="submit" value="Recherche" name="submit" id="bouton">
    </form>
</br>

    <?php
    if ($_SESSION['search']=="vide") {
        $user=$_SESSION['nom'];
        echo "<div id='titre1'>Client :</div> ";
        echo "</br>";
        $utilisateur = selectuser();
        $nombre = count($utilisateur);
        for ($i = 0; $i < $nombre; $i++) {
            $ID = $utilisateur[$i]['ID'];
            $user2=$utilisateur[$i]['nom'];
            echo($utilisateur[$i]['nom']);
            echo "  ";
            echo($utilisateur[$i]['prénom']);
            echo "  ";
            echo("<a href='conv/$user2/$user' class='message'>Envoyer un message</a>");
            echo("</br>");
            echo("</br>");
        }
        echo "<div id='titre1'>Administrateurs :</div> ";
        echo "</br>";
        $administrateur = selectadmin();
        $nombre2 = count($administrateur);
        for ($i = 0; $i < $nombre2; $i++) {
            $ID = $administrateur[$i]['ID'];
            $user2=$administrateur[$i]['nom'];
            echo($administrateur[$i]['nom']);
            echo "  ";
            echo($administrateur[$i]['prénom']);
            echo "  ";
            echo("<a href='conv/$user/$user2' class='message'>Envoyer un message</a>");
            echo("</br>");
            echo("</br>");

        }

    }
    if($_SESSION['search'] !="vide"){
        echo ($_SESSION['search'][0]);
        echo ("  ");
        echo ($_SESSION['search'][1]);
        echo "  ";
        echo("<a href='conv/$user/$user2' class='message'>Envoyer un message</a>");
        echo("</br>");
        echo("</br>");
        $_SESSION['search']="vide";
    }

    ?>

</div>
</body>
<?php
require "footer/footer.php"
?>
</html>

