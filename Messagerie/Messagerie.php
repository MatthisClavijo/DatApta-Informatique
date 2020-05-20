

<!DOCTYPE html>
<html>
<title>Profil</title>

<head>
    <link rel="stylesheet" href="Messagerie/Messagerie.css">


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
</head>
<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<div id="MessageBox">
    <?php
    $listeconv=getallconv($_SESSION['nom']);
    $user=$_SESSION["nom"];
    for ($i=0;$i<sizeof($listeconv[0]);$i++){
        for ($j=0;$j<sizeof($listeconv[1]);$j++){
            if ($listeconv[0][$i][0]==$listeconv[1][$j][0]){
                $listeconv[1][$j][0]="";
            }
        }
    }
    for ($i=0;$i<sizeof($listeconv[0]);$i++){
        $user2=$listeconv[0][$i][0];
        echo ($listeconv[0][$i][0]);
        echo ("  ");
        echo ("<a href='conv/$user2/$user'class='conv'>Voir conversation</a>");
        echo ("</br>");
        echo ("</br>");
    }
    for ($j=0;$j<sizeof($listeconv[1]);$j++){
       if ($listeconv[1][$j][0]==""){

       }
       else{
           $user2=$listeconv[1][$j][0];
           echo ($listeconv[1][$j][0]);
           echo ("  ");
           echo ("<a href='conv/$user/$user2' class='conv'>Voir conversation</a>");
           echo ("</br>");
           echo ("</br>");
       }
    }

    ?>
</div>
</body>
<?php
require "footer/footer.php"
?>
</html>=)
