<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Home</title>
<head>

    <link rel="stylesheet" href="AcceuilConnexion/AcceuilConnexion.css">


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
            <div id="ProfilBox">
                <p>
                    <?php
                    $affichage='<p>Welcome '.$_SESSION['nom'].'  '.$_SESSION['prénom'].'';
                    echo ($affichage);
                    ?>
                    <a href="deconnexion" id="deconnexion" ></br>Logout</a>
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
require "footerEN/footer.php"
?>
</html>
