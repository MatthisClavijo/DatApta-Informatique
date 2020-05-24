<!DOCTYPE html>
<html>
<title>Profile</title>

<head>
    <link rel="stylesheet" href="Messagerie/Messagerie.css">


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
                    <a href="recherche">Users search</a>
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
        echo ("<a href='conv/$user2/$user'class='conv'>See chat</a>");
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
            echo ("<a href='conv/$user/$user2' class='conv'>See chat</a>");
            echo ("</br>");
            echo ("</br>");
        }
    }

    ?>
</div>
</body>
<?php
require "footerEN/footer.php"
?>
</html>=)