<!DOCTYPE html>
<html>
<title>Profile</title>

<head>
    <link rel="stylesheet" href="PageProfil/PageProfil.css">


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
<form id="boxprofil">
    <h3 id="title">Profile</h3>
    <div id="ligne"></div>
    <p>
    <div id="name">
        Name: <?php
        echo ($_SESSION['nom']);
        ?>
    </div>
    <div id="email">
        Email address:  <?php
        echo ($_SESSION['Adresse mail']);
        ?>
    </div>
    </p>
    <p>
    <div id="prénom">
        First name:  <?php
        echo ($_SESSION['prénom']);
        ?>
    </div>

    <div id="date">
        Date of birth: <?php
        echo ($_SESSION['date_de_naissance']);
        ?>
    </div>

    </p>
    <p>
        <a id="modif" href="modifprofil">Modify profile</a>
    </p>
</form>
</body>
<?php
require "footerEN/footer.php";
?>
</html>

