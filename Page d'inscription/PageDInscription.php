<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="PageDInscription.css">
    <head>
        </p>
        <ul>
            <img src = 'Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="index.php?action=acceuil">Accueil</a></li>
            <li><a href="#statistiques">Statistiques</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Communauté</a>
                <div class="dropdown-content">
                    <a href="#">FAQ</a>
                    <a href="#">Classement</a>
                </div>
            </li>
            <li><a href="mon profil">Mon profil</a></li>
            <div >

            </div>
        </ul>
    </head>

<body>
<div>
    <p><img src = 'aircraft-01-1254871.jpg'
            width = 100%
            height = "588">
    </p>
    <form id="boxInscription" method="post" action="index.php?action=add_user">
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
<footer>


    <span class="contact">
        <h3>Nous contacter :</h3>
    <p >
        <img src="noun_Mail_3146799.png" class="mail"> <a href="mailto:datapta.officiel@gmail.com" id="mail">datapta.officiel@gmail.com</a>
    </p>
        </br>

        <p>
        <img src="telbis.png" class="phone">



    </p>
    </span>
    <span class="mention">
    <p >
        Mention légales</br>
        Condition générales d'utilisation
    </p>
    </span>
    <span class="logo">
        <img src="facebook-3-logo-png-transparent.png" id="facebook">

        <img src="Linkedin_circle.svg.png" id="linkedin">

        <img src="twitter.png" id="twitter">

        <img src="instagram-Logo-PNG-Transparent-Background-download-1-1.png" id="instagram">
        <p>© DatApta-Tous droits réservés</p>
    </span>
</footer>
</html>