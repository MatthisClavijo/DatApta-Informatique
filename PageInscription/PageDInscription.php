<!DOCTYPE html>
<html>
<title>Inscription</title>
<head>
    <link rel="stylesheet" href="PageInscription/PageDInscription.css">
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
    <form id="boxInscription" method="post" action="add_user">
        <h3 id="title">Inscription</h3>
        <div id="ligne"></div>
        <p>
        <div id="name">
            Nom : <input type="text" name="nom">
        </div>
        <div id="email">
            Adresse Mail: <input type="email" name="email" >
        </div>
        </p>
        <p>
        <div id="prénom">
            Prénom : <input type="text" name="prénom">
        </div>
        <div id="password">
            Mot de Passe : <input type="password" name="password">
        </div>
        </p>
        <p>
        <div id="date">
            Date de </br> Naissance : <input type="date" name="date">
        </div>
        <div id="Cpassword">
            Confirmation </br> Mot de Passe : <input type="password" name="Cpassword">
        </div>
        </p>
        <p>
        <div id="cgu">
            Accepter les Conditions Générales d'Utilisation :
            <input type="checkbox" name="cgu">
        </div>
        <div id="submit">
            <input type="submit" value="S'inscrire" name="submit">
        </div>
        </p>
    </form>
</div>
</body>
<?php
require "footer/footer.php";
?>
</html>