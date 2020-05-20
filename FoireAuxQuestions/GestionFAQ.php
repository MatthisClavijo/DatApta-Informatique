<!DOCTYPE html>
<html>
<title>FAQ</title>

<head>
    <link rel="stylesheet" href="GestionFoireAuxQuestions/GestionFAQ.css">


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
            if(sizeof($_SESSION)!=0) {


                if ($_SESSION['type'] == "admin") {
                    echo "  <li class=\"dropdown\">
                <a href=\"javascript:void(0)\" class=\"dropbtn\">Gestion</a>
                <div class=\"dropdown-content\">
                    <a href=\"gestion_u\">Gestion Utilisateur</a>
                    <a href=\"gestion_faq\">Gestion FAQ</a>
                    <a href=\"capteur\">Gestion Capteurs</a>
                </div>";
                }
            }

            ?>
        </ul>
    </head>

<body>
<p><img src = 'Images/aircraft-01-1254871.jpg'
        width = 100%
        height = "588">
</p>
<div id="BoxFAQ">
    <form id="Ajouter" method="post" action="add_QR">
        <p>Ajouter :  Question :<input type="text" name="Question" > Réponse: <input type="text" name="Réponse">
            <input type="submit" value="Ajouter" name="submit">
        </p>
        </br>
    </form>
    <?php
    $faq=selectFAQ();
    $nombre=count($faq);
    for ($i=0;$i <$nombre;$i++){
        $ID=$faq[$i]['ID'];
        echo "<h3>Q : </h3>";
        echo ($faq[$i]['Question']);
        echo "</br> ";
        echo("<form id='edit_Q' method='post' action='edit_Q/$ID'>
            <input type='text' name='Edit_Q'>
            <input type=\"submit\" value=\"Edit\" name=\"submit\">
        </form>");
        echo"<h3>R : </h3>";
        echo ($faq[$i]['Réponse']);
        echo "  ";
        echo("</br>");
        echo ("<form id='edit_R' method='post' action='edit_R/$ID'>
            <input type='text' name='Edit_R'>
            <input type=\"submit\" value=\"Edit\" name=\"submit\">
        </form>");
        echo ("</br>");
        echo("<a href='delete_QR/$ID' class='option' id='suppr'>Supprimer</a>");
        echo("</br>");
        echo("</br>");
        echo("</br>");
    }
    ?>

</div>
</body>
<?php
require "footer/footer.php";
?>
</html>

