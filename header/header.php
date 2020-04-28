<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="header/styleHeader.css">
</head>

<header>
    <nav>
        <img src="Images/Infinite_measures_logo.png" alt="Logo d'Infinite Measures" id="logo">
        <div class="accueil"><a href="accueil" <?php if ($_SESSION['active'] == 'Accueil') { ?> class="active" <?php } ?>>Accueil</a></div>
        <div class="profil"><a href="profil" <?php if ($_SESSION['active'] == 'Profil') { ?> class="active" <?php } ?>>Profil</a></div>
        <div class="stats"><a href="statistiques" <?php if ($_SESSION['active'] == 'Statistiques') { ?> class="active" <?php } ?>>Statistiques</a></div>
        <div class="commu"><a href="javascript:void(0)" class="dropbtn" <?php if ($_SESSION['active'] == 'Communaute') { ?> class="active" <?php } ?>>Communauté</a>
            <div class="sousMenuCommu">
                <div><a href="">FAQ</a></div>
                <div><a href="">Classement</a></div>
            </div>
        </div>
    <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
        <div class="gestion">
            <a href="javascript:void(0)" class="dropbtn" <?php if ($_SESSION['active'] == 'Gestion') { ?> class="active" <?php } ?>>Gestion</a>
            <div class="sousMenuGestion">
                <div><a href="">Capteurs</a></div>
                <div><a href="">FAQ</a></div>
                <div><a href="">Utilisateurs</a></div>
            </div>
        </div>
    <?php } ?>
        <div class="connectionSection">
        <?php if(!isset($_SESSION['isConnected']) || !$_SESSION['isConnected']) { ?>
            <a href="inscription" class="registration">Sign up</a>
            <a class="login" onclick="openForm()">Sign in</a>
        <?php } else { ?>
            <a href="accueil.php" onclick="unsetSession()" class="logout">Log out</a>
            <script type="text/javascript">function unsetSession() {<?php session_unset() ?>}</script>
        <?php } ?>
        </div>
    </nav>

    <!-- ------ Login Form part ------ -->
    <?php if(!isset($_SESSION['isConnected']) || !$_SESSION['isConnected']) { ?>
    <div id="loginForm">
        <form action="connexion" method="post">
            <h1>Connexion</h1>
            <p><label for="userName">Nom d'utilisateur</label> :
                <input type="text" name="user_name" id="userName" placeholder="Nom d'utilisateur" required autofocus></p>
            <p><label for="password">Mot de passe</label> :
                <input type="password" name="password" id="password" placeholder="Mot de passe" required></p>
            <input type="submit" value="Connexion" id="submit">
            <button type="button" id="cancelButton" onclick="closeForm()">Annuler et fermer</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("loginForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("loginForm").style.display = "none";
        }
    </script>
    <?php } ?>
</header>
</html>
