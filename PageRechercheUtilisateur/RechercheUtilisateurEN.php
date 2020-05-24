<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Users management</title>
<head>

    <link rel="stylesheet" href="PageRechercheUtilisateur/RechercheUtilisateur.css">


    <head>
        </p>
        <ul>
            <img src = 'Images/Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="accueil">Home</a></li>
            <li><a href="statistiques">Statistics</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Community</a>
                <div class="dropdown-content">
                    <a href="foire">FAQ</a>
                    <a href="#">Ranking</a>
                    <a href="recherche">User search</a>
                    <a href="mess">Mailbox</a>
                </div>
            </li>
            <li><a href="profil">My profile</a></li>
            <?php
            if($_SESSION['type']=="admin"){
                echo"  <li class=\"dropdown\">
                <a href=\"javascript:void(0)\" class=\"dropbtn\">Admin</a>
                <div class=\"dropdown-content\">
                    <a href=\"gestion_u\">User manager</a>
                    <a href=\"gestion_faq\">FAQ manager</a>
                    <a href=\"capteur\">Sensors manager</a>
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
        <input type="text" placeholder="Enter a name" id="recherche" name="recherche">
        <input type="radio" name="type" value="client">Client
        <input type="radio" name="type" value="admin">Administrator
        <input type="submit" value="Search" name="submit" id="bouton">
    </form>
    </br>

    <?php
    if ($_SESSION['search']=="vide") {
        echo "<div id='titre1'>Client:</div> ";
        echo "</br>";
        $utilisateur = selectuser();
        $nombre = count($utilisateur);
        for ($i = 0; $i < $nombre; $i++) {
            $ID = $utilisateur[$i]['ID'];
            echo($utilisateur[$i]['nom']);
            echo "  ";
            echo($utilisateur[$i]['prénom']);
            echo "  ";
            echo("<a href='#' class='message'>Send a message</a>");
            echo("</br>");
            echo("</br>");
        }
        echo "<div id='titre1'>Administrators:</div> ";
        echo "</br>";
        $administrateur = selectadmin();
        $nombre2 = count($administrateur);
        for ($i = 0; $i < $nombre2; $i++) {
            $ID = $administrateur[$i]['ID'];
            echo($administrateur[$i]['nom']);
            echo "  ";
            echo($administrateur[$i]['prénom']);
            echo "  ";
            echo("<a href='#' class='message'>Send a message</a>");
            echo("</br>");
            echo("</br>");

        }

    }
    if($_SESSION['search'] !="vide"){
        echo ($_SESSION['search'][0]);
        echo ("  ");
        echo ($_SESSION['search'][1]);
        echo "  ";
        echo("<a href='#' class='message'>Send a message</a>");
        echo("</br>");
        echo("</br>");
        $_SESSION['search']="vide";
    }

    ?>

</div>
</body>
<?php
require "footerEN/footer.php"
?>
</html>