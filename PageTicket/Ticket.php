<!DOCTYPE html>
<html>
<title>Profil</title>

<html>
    <link rel="stylesheet" href="PageTicket/Ticket.css">



        </p>
        <ul>
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
<div id="BoxHelp">
<form method="post" name="EnvoieTicket" action="sendTicket">
    <div>
    <?php
    if ($_SESSION['isConnected'] ==false) {
        echo ("Entrez votre email : <input type='email' name='email'>");
    }
    ?>
    </div>
    <p id="title">Décrivez votre problème : </p>
    <div>
        <textarea name='Explication' cols='125' rows='15'></textarea>
    </div>
    <div>
        <input type="submit" value="Envoyer" name="Envoyer">
    </div>
</form>
</div>
</body>
<?php
require "footer/footer.php";
?>
</html>
