<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="header/styleHeader.css">
</head>

<header>
    <nav>
        <img src="Images/Infinite_measures_logo.png" alt="Logo d'Infinite Measures" id="logo">
        <div class="accueil"><a href="accueil" >Home</a></div>
        <div class="profil"><a href="profil" >Profile</a></div>
        <div class="stats"><a href="statistiques" >Statistics</a></div>
        <div class="commu"><a href="javascript:void(0)" class="dropbtn" >Community</a>
            <div class="sousMenuCommu">
                <div><a href="foire">Q&A</a></div>
                <div><a href="">Ranking</a></div>
                <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']) {
                    echo("<div><a href=\"recherche\">Search User</a></div>
                <div><a href='mess'>Message</a></div>");
                }
                ?>
            </div>
        </div>
        <?php if(isset($_SESSION['type']) && $_SESSION['type'] == "admin") { ?>
            <div class="gestion">
                <a href="javascript:void(0)" class="dropbtn" >Gestion</a>
                <div class="sousMenuGestion">
                    <div><a href="capteur">Sensors</a></div>
                    <div><a href="gestion_faq">Q&A</a></div>
                    <div><a href="gestion_u">Users</a></div>
                    <div><a href="Ticket">See Ticket</a></div>
                </div>
            </div>
        <?php } ?>
        <div class="connectionSection">
            <?php if(!isset($_SESSION['isConnected']) || !$_SESSION['isConnected']) { ?>
                <a href="inscription" class="registration">Sign up</a>
                <a class="login" onclick="openForm()">Sign in</a>
            <?php } else { ?>
                <div id="infoBlock">
                    <?php
                    echo ("<p>".$_SESSION['prénom']."</p>");
                    echo ("<p>".$_SESSION['nom']."</p>");
                    if (isset($_SESSION['type']) && $_SESSION['type'] == "admin") echo ("<p id='grade'>Administrator</p>");
                    ?>
                </div>
                <a href="deconnexion" class="logout">Log out</a>
            <?php } ?>
        </div>

        

    </nav>

    <!-- ------ Login Form part ------ -->
    <?php if(!isset($_SESSION['isConnected']) || !$_SESSION['isConnected']) { ?>
        <div id="loginForm">
            <form action="connexion" method="post">
                <h1>Connection</h1>
                <p><label for="userName">User name</label> :
                    <input type="text" name="email" id="userName" placeholder="Email" required autofocus></p>
                <p><label for="password">Password</label> :
                    <input type="password" name="psw" id="password" placeholder="Mot de passe" required></p>
                <input type="submit" value="Sign in" id="submit">
                <button type="button" id="cancelButton" onclick="closeForm()">Cancel and close</button>
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
