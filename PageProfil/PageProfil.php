<!DOCTYPE html>
<html>
<title>Acceuil</title>

<head>
    <link rel="stylesheet" href="PageProfil/PageProfil.css">


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
            <div >
            </div>
        </ul>
    </head>

<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<form id="boxprofil">
    <h3 id="title">Inscription</h3>
    <div id="ligne"></div>
    <p>
    <div id="name">
        Nom : <?php
        echo ($_SESSION['nom']);
        ?>
    </div>
    <div id="email">
        Adresse Mail:  <?php
        echo ($_SESSION['Adresse mail']);
        ?>
    </div>
    </p>
    <p>
    <div id="prénom">
        Prénom :  <?php
        echo ($_SESSION['prénom']);
        ?>
    </div>

    <div id="date">
        Date de Naissance : <?php
        echo ($_SESSION['date_de_naissance']);
        ?>
    </div>

    </p>
    <p>
        <a id="modif" href="modifprofil">Modifier le profil</a>
    </p>
</form>
</body>
<?php
require "footer/footer.php";
?>
</html>

