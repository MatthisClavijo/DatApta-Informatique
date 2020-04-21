<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="PageDeModifDeProfil/PageDeModificationDeProfil.css">

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
            <div >

            </div>
        </ul>
    </head>

<body>
<div>
    <p><img src = 'Images/aircraft-01-1254871.jpg'
            width = 100%
            height = "588">
    </p>
    <form id="boxmodification" method="post" action="modif_user">
        <h3 id="title">Modification du profil</h3>
        <div id="ligne"></div>
        <p>
        <div id="name">
            <input type="text" name="nom" placeholder="Nom">
        </div>
        <div id="email">
            <input type="email" name="email" placeholder="Email">
        </div>
        </p>
        <p>
        <div id="prénom">
            <input type="text" name="prénom" placeholder="Prénom">
        </div>
        <div id="password">
            <input type="password" name="password" placeholder="Mot de passe">
        </div>
        </p>
        <p>
        <div id="date">
            Date de Naissance : </br> <input type="date" name="date">
        </div>
        <div id="Cpassword">
            <input type="password" name="Cpassword" placeholder="Confirmation du mot de passe" >
        </div>
        </p>
        <p>

        <div id="submit">
            <input type="submit" value="Modifier" name="submit">
        </div>
        </p>
    </form>
</div>
</body>
<?php
require "footer/footer.php";
?>
</html>