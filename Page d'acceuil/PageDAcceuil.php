<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="PageDAcceuil.css">


    <head>
        </p>
        <ul>
            <img src = 'Infinite_measures_logo.png'width = "170"height="145">
            <li><a class = "active" href="#accueil">Accueil</a></li>
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
                <a href="index.php?action=inscription" id="inscription" >Sign up</a>
                <a class="open-button" onclick="openForm()" id="connexion">Sign in</a>
            </div>
        </ul>
    </head>

<body>
<p><img src = 'aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<div class="form-popup" id="myForm">
    <form action="index.php?action=connexion" class="form-container" method="post">
        <h1>Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Mot de passe</b></label>
        <input type="password" placeholder="Enter mot de passe" name="psw" required>

        <button type="submit" class="btn" >Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
</div>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
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